<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'text',
        'category_id',
        'type',   // keeping your existing type field
        'image',
        'user_id' // optional if you want to track the creator
    ];

    /**
     * Relationship: A post belongs to a category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Optional: Relationship: A post belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}