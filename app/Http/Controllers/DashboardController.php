<?php
namespace App\Http\Controllers;

use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        return view('dashboard', compact('totalPosts'));
    }
}