<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


/**
 * Post Model
 * 
 * Represents a news post created by an admin user.
 */
class Post extends Model
{
    use HasFactory;

    // Primary key column (non-default 'postid')
    protected $primaryKey = 'postid';

    // Fields allowed for mass assignment
    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'creator',
      
    ];


    /**
     * Relationship: Post belongs to a user (creator).
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator');
    }

    /**
     * Relationship: Post belongs to many categories (many-to-many).
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'postid', 'category_id');
    }

    /**
     * Relationship: Post belongs to many sub-categories (many-to-many).
     */
    public function subCategories()
    {
        return $this->belongsToMany(SubCategory::class, 'post_sub_categories', 'postid', 'subCategory_id');
    }

    /**
     * Relationship: Post belongs to many keywords (many-to-many).
     */
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'post_keywords', 'postid', 'keyword_id');
    }

    /**
     * Relationship: Post has many comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'postid');
    }

    /**
     * Relationship: Post has many gallery images.
     */
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'postid');
    }

     /**
     * Method: Used to auto generate the slug according to title.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title) . '-' . uniqid();
        });
    }

    
}
