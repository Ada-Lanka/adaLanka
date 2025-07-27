<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Keyword Model
 * 
 * Stores unique keywords used for posts.
 */
class Keyword extends Model
{
    use HasFactory;

    protected $fillable = ['keyword'];

    /**
     * Relationship: Keyword belongs to many posts (many-to-many).
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_keywords', 'keyword_id', 'postid');
    }
}
