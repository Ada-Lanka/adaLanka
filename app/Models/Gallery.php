<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Gallery Model
 * 
 * Stores image URLs related to posts for the gallery page.
 */
class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'postid'];

    /**
     * Relationship: Gallery image belongs to one post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'postid');
    }
}
