<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * StaticPage Model
 * 
 * Stores static content pages like Privacy Policy, DMCA, Contact Us.
 */
class StaticPage extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content'];

  
}
