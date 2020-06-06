jQuery( document ).ready(function($) {
    if($(".chat-content").length) {
        $(".chat-content").niceScroll({
            cursoropacitymin: .3,
            cursoropacitymax: .8,
        });
        scrollToBottom();
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function scrollToBottom() {
        $('.chat-content').getNiceScroll(0).doScrollTop($('.chat-content').height());
    }

    $('#btnSendMessage').click(() => {
        const message = $('#txtMessage').val();
        $.post(sendMessageUrl, {message: message})
            .done(function (response) {
                if (response.success) {
                    const data = response.data;
                    let message = {
                        messageId: data.id,
                        userAvatar: data.sentBy.avatarUrl,
                        messageBody: data.body,
                        messageTime: data.created_at_time,
                    };

                    if (data.sentBy.id === authUserId) {
                        message.messageClass = 'right';
                    } else {
                        message.messageClass = 'left';
                    }


                    var template = $.templates("#tmplChatMessage");

                    var htmlOutput = template.render(message);

                    $('#chatContainer').append(htmlOutput);
                    $('#txtMessage').val('');
                    scrollToBottom();
                }
            })
            .fail(function () {
                alert("error");
            });
    });
});
