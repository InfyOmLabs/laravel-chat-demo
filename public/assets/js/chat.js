jQuery(document).ready(function ($) {
    if ($(".chat-content").length) {
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
        setTimeout(() => {
            $('.chat-content').getNiceScroll(0).doScrollTop($('.chat-content').height());
        }, 400);
    }

    $('#txtMessage').keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            sendMessage();
        }
    });

    $('#btnSendMessage').click(() => {
        sendMessage();
    });

    function sendMessage() {
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

                    addMessageToContainer(message);
                }
            })
            .fail(function () {
                alert("error");
            });

    }

    function addMessageToContainer(message) {
        const template = $.templates("#tmplChatMessage");

        const htmlOutput = template.render(message);

        $('#chatContainer').append(htmlOutput);
        $('#txtMessage').val('');
        scrollToBottom();

    }
});
