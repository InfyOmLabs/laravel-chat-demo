<script id="tmplChatMessage" type="text/x-jsrender">
    <div class="chat-item chat-{{:messageClass}}"
        data-message-id="{{:messageId}}">
        <img src="{{:userAvatar}}">
        <div class="chat-details">
            <div class="chat-text">{{:messageBody}}</div>
            <div class="chat-time">{{:messageTime}}</div>
        </div>
    </div>
</script>
