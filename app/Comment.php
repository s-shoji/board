<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Tweet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
