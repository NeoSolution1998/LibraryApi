<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
    /* public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    } */
}
