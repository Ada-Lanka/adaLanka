<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * PostKeyword Model
 * 
 * Pivot table linking posts and keywords (many-to-many).
 */
class PostKeyword extends Model
{
    protected $fillable = ['postid', 'keyword_id'];

    /**
     * Relationship: Pivot belongs to one post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'postid');
    }

    /**
     * Relationship: Pivot belongs to one keyword.
     */
    public function keyword()
    {
        return $this->belongsTo(Keyword::class, 'keyword_id');
    }
}
