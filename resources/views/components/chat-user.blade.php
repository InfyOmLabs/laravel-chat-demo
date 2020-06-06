<li class="media" data-user-id="{{ $user->id }}">
    <img alt="image" class="mr-3 rounded-circle" width="50"
         src="{{ $user->avatar_url }}">
    <div class="media-body">
        <div class="mt-0 mb-1 font-weight-bold user-name">{{ $user->name }} {{ ($user->id == Auth::id()) ? '(You)' : '' }}</div>
        <div class="text-danger text-small font-600-bold user-status-container">
            <i class="fas fa-circle"></i> <span class="user-status-text">Offline</span>
        </div>
    </div>
</li>
