<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        // Model relationship with user
        return $this->belongsTo(User::class);
    }
}
