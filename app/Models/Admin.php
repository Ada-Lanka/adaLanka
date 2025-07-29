<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'admin';

    // Fields allowed for mass assignment
    protected $fillable = [
        'user_id',
        'post_count',
        'type', // admin role/type (e.g. superadmin, editor)
    ];

    /**
     * Relationship: Admin belongs to one User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
