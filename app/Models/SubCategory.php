<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * SubCategory Model
 * 
 * Represents sub-categories or tags for posts.
 */
class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['subCategory_name'];

    /**
     * Relationship: SubCategory belongs to many posts (many-to-many).
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_sub_categories', 'subCategory_id', 'postid');
    }
}
