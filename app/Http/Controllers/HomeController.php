<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $highlightedPosts = Post::where('type', 'highlighted')->get();
        $latestPosts      = Post::where('type', 'latest')->get();
        $categories       = Category::all();

        return view('home', compact('highlightedPosts', 'latestPosts', 'categories'));
    }
}