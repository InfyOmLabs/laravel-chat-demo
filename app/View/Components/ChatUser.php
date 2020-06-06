<?php

namespace App\View\Components;

use App\User;
use Illuminate\View\Component;

class ChatUser extends Component
{
    /** User */
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.chat-user');
    }
}
