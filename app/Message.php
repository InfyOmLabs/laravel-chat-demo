<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'body'
    ];

    public function sentBy()
    {
        return $this->belongsTo(User::class, 'sent_by');
    }
}
