<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Views extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'ip_address',
        'viewed_at',
        'user_agent',
    ];
}
