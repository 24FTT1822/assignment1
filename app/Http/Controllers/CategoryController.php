<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug)
    {
        // Find the category by slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Get all posts in this category
        $posts = $category->posts()->latest()->get();

        return view('categories.show', compact('category', 'posts'));
    }
}