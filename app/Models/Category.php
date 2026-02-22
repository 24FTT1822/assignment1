<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Relationship: a category has many posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}