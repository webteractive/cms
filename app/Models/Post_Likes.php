<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Likes extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'ip_address',
        'liked_at',
        'user_agent',
    ];
}
