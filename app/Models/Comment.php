<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Comment Model
 * 
 * Stores comments on posts by visitors (not authenticated users).
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'postid',
        'email',
        'comment',
        'created_at',
    ];
    protected $casts = [
    'created_at' => 'datetime',
];

    // Disable automatic timestamps since created_at is manual
    public $timestamps = false;

    /**
     * Relationship: Comment belongs to one post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'postid');
    }
}
