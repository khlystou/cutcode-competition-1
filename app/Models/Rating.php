<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'rating'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}