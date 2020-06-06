<div class="chat-item chat-{{ $message->sent_by == \Auth::id() ? 'right':'left' }}"
     data-message-id="{{ $message->id }}">
    <img src="{{ $message->sentBy->avatar_url }}">
    <div class="chat-details">
        <div class="chat-text">{{ $message->body }}</div>
        <div class="chat-time">{{ $message->created_at->format('h:i') }}</div>
    </div>
</div>
