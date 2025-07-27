<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * PostCategory Model
 * 
 * Pivot table linking posts and categories (many-to-many).
 */
class PostCategory extends Model
{
    protected $fillable = ['postid', 'category_id'];

    /**
     * Relationship: Pivot belongs to one post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'postid');
    }

    /**
     * Relationship: Pivot belongs to one category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
