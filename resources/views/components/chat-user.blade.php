<li class="media" data-user-id="{{ $user->id }}">
    <img alt="image" class="mr-3 rounded-circle" width="50"
         src="{{ $user->avatar_url }}">
    <div class="media-body">
        <div class="mt-0 mb-1 font-weight-bold" id="lblName">{{ $user->name }}</div>
        <div class="text-success text-small font-600-bold" id="lblStatus">
            <i class="fas fa-circle"></i> Online
        </div>
    </div>
</li>
