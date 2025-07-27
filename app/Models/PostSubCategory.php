<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * PostSubCategory Model
 * 
 * Pivot table linking posts and sub-categories (many-to-many).
 */
class PostSubCategory extends Model
{
    protected $fillable = ['postid', 'subCategory_id'];

    /**
     * Relationship: Pivot belongs to one post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'postid');
    }

    /**
     * Relationship: Pivot belongs to one sub-category.
     */
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategory_id');
    }
}
