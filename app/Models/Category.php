<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Category Model
 * 
 * Represents main news categories (e.g., Health, Sports).
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    /**
     * Relationship: Category belongs to many posts (many-to-many).
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_categories', 'category_id', 'postid');
    }
}
