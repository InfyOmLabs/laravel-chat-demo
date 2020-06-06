jQuery(document).ready(function ($) {

    // initialize nice scroll for chat container
    if ($(".chat-content").length) {
        $(".chat-content").niceScroll({
            cursoropacitymin: .3,
            cursoropacitymax: .8,
        });
        scrollToBottom();
    }

    // setup csrf protection
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // listen for message
    Echo.channel('laravel-live-chat')
        .listen('NewChatMessageEvent', (e) => {
            appendMessageToContainer(e.message);
        });

    // listen for user online offline status
    Echo.join('laravel-live-users')
        .here((users) => {
            console.log(users);
            $.each(users, (index, user) => {
                updateUserStatus(user, 1);
            })
        })
        .joining((user) => {
            updateUserStatus(user, 1);
        })
        .leaving((user) => {
            updateUserStatus(user, 0);
        });

    // update user status to online/offline
    function updateUserStatus(user, status) {
        let userStatusContainer = $('[data-user-id="'+user.id+'"] > div > .user-status-container');
        let userStatusText = $('[data-user-id="'+user.id+'"] > div > div > .user-status-text');

        if (status) { // online
            userStatusContainer.removeClass('text-danger');
            userStatusContainer.addClass('text-success');

            userStatusText.text('Online');
        } else { // offline
            userStatusContainer.removeClass('text-success');
            userStatusContainer.addClass('text-danger');

            userStatusText.text('Offline');
        }
    }

    // scroll chat container to bottom
    function scrollToBottom() {
        setTimeout(() => {
            var ele = $('.chat-content');
            ele.scrollTop(ele.prop("scrollHeight"));
            // $('.chat-content').getNiceScroll(0).doScrollTop($('.chat-content').height());
        }, 200);
    }

    // handle enter key on new message text input
    $('#txtMessage').keypress(function (event) {
        const keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            sendMessage();
        }
    });

    // handle click event of send message button
    $('#btnSendMessage').click(() => {
        sendMessage();
    });

    // send message to backend
    function sendMessage() {
        const message = $('#txtMessage').val();
        $.post(sendMessageUrl, {message: message})
            .done(function (response) {
                if (response.success) {
                    //success
                }
            })
            .fail(function () {
                alert("error");
            });
    }

    // append the new incoming message to change container
    function appendMessageToContainer(message) {

        // prepare message data for template
        let messageData = {
            messageId: message.id,
            userAvatar: message.sentBy.avatarUrl,
            messageBody: message.body,
            messageTime: message.created_at_time,
        };

        if (message.sentBy.id === authUserId) {
            messageData.messageClass = 'right';
        } else {
            messageData.messageClass = 'left';
        }

        // retrieve template (jsRender)
        const template = $.templates("#tmplChatMessage");

        // compile template with data
        const htmlOutput = template.render(messageData);

        // append to container
        $('#chatContainer').append(htmlOutput);

        $('#txtMessage').val(''); // make message box empty

        scrollToBottom();
    }
});
