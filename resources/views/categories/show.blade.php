@extends('layouts.app')

@section('title', $category->name)

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-4 gap-10">

    <!-- MAIN CONTENT -->
    <div class="md:col-span-3">

        <!-- Category Banner -->
        <h2 class="text-3xl font-bold border-b-2 border-red-600 pb-2 mb-6">
            {{ $category->name }}
        </h2>

        <!-- Posts in this category -->
        <div class="grid gap-6 md:grid-cols-3">
            @forelse($posts as $post)
                <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img src="{{ asset('images/' . $post->image) }}"
                             class="w-full h-40 object-cover rounded mb-3">
                        <h3 class="text-lg font-semibold mb-1">{{ $post->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $post->category->name }}</p>
                    </a>

                    @auth
                    <div class="mt-3 flex gap-2">
                        <a href="{{ route('posts.edit', $post->id) }}"
                           class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                            Edit
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this post?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                    @endauth
                </div>
            @empty
                <p class="text-gray-500">No posts in this category yet.</p>
            @endforelse
        </div>

    </div>

    <!-- SIDEBAR -->
    <aside class="md:col-span-1 space-y-6">

        <!-- Categories List -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-bold mb-4 border-b pb-2">Categories</h3>
            <ul class="space-y-3">
                @foreach(\App\Models\Category::all() as $cat)
                    <li>
                        <a href="{{ route('categories.show', $cat->slug) }}"
                           class="block px-3 py-2 rounded hover:bg-red-50 hover:text-red-600 transition">
                            {{ $cat->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </aside>

</div>

@endsection