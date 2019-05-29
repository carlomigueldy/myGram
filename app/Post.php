<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Hi Laravel, take Guard off we good
    protected $guarded = [];

    public function user()
    {
        // Model relationship with user
        return $this->belongsTo(User::class);
    }
}
