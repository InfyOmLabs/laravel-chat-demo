<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $messageText = $request->get('message');

        $message = new Message();
        $message->body = $messageText;
        $message->sent_by = \Auth::id();
        $message->save();

        return response()->json(
            [
                'success' => true,
                'data' => [
                    'id' => $message->id,
                    'body' => $message->body,
                    'created_at_time' => $message->created_at->format('h:i'),
                    'sentBy' => [
                        'id' => \Auth::id(),
                        'name' => \Auth::user()->name,
                        'avatarUrl' => \Auth::user()->avatar_url,
                    ]
                ]
            ]
        );
    }
}
