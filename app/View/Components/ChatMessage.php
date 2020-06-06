<?php

namespace App\View\Components;

use App\Message;
use Illuminate\View\Component;

class ChatMessage extends Component
{
    /** ChatMessage */
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.chat-message');
    }
}
