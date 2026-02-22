@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-4 gap-10">

    <!-- MAIN CONTENT -->
    <div class="md:col-span-3 space-y-12">

        <!-- Highlighted Blogs -->
        <section>
            <h2 class="text-2xl font-bold border-b-2 border-red-600 pb-2 mb-6">
                Highlighted Blogs
            </h2>

            <div class="grid gap-6 md:grid-cols-2">
                @foreach($highlightedPosts as $post)
                    <div class="bg-yellow-100 border-2 border-yellow-400 rounded-lg shadow hover:shadow-lg transition overflow-hidden">

                        <a href="{{ route('posts.show', $post->id) }}">
                            <img src="{{ asset('images/' . $post->image) }}"
                                 class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                                <p>{{ Str::limit($post->text, 100) }}</p>
                            </div>
                        </a>

                        {{-- Edit/Delete buttons only visible for logged-in users --}}
                        @auth
                        <div class="px-4 pb-4 flex gap-3">
                            <a href="{{ route('posts.edit', $post->id) }}"
                               class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                                Edit
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
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
                @endforeach
            </div>
        </section>

        <!-- Latest Blogs -->
        <section>
            <h2 class="text-2xl font-bold border-b-2 border-red-600 pb-2 mb-6">
                Latest Blogs
            </h2>

            <div class="grid gap-6 md:grid-cols-3">
                @foreach($latestPosts as $post)
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">

                        <a href="{{ route('posts.show', $post->id) }}">
                            <img src="{{ asset('images/' . $post->image) }}"
                                 class="w-full h-40 object-cover rounded mb-3">
                            <h3 class="text-lg font-semibold mb-1">{{ $post->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $post->category->name }}</p>
                        </a>

                        {{-- Edit/Delete buttons only visible for logged-in users --}}
                        @auth
                        <div class="mt-3 flex gap-2">
                            <a href="{{ route('posts.edit', $post->id) }}"
                               class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                                Edit
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
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
                @endforeach
            </div>
        </section>

    </div>

    <!-- SIDEBAR -->
    <aside class="md:col-span-1 space-y-6">

        <!-- Categories -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-bold mb-4 border-b pb-2">Categories</h3>

            <ul class="space-y-3">
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('categories.show', $category->slug) }}"
                           class="block px-3 py-2 rounded hover:bg-red-50 hover:text-red-600 transition">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Admin Actions (only visible to logged-in users) -->
        @auth
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-bold mb-4 border-b pb-2">Admin Actions</h3>

            <ul class="space-y-3">
                <li>
                    <a href="{{ route('posts.create') }}"
                       class="block px-3 py-2 rounded bg-blue-600 text-white hover:bg-blue-700 transition">
                        Create New Post
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard') }}"
                       class="block px-3 py-2 rounded bg-green-600 text-white hover:bg-green-700 transition">
                        Go to Dashboard
                    </a>
                </li>
            </ul>
        </div>
        @endauth

    </aside>

</div>

@endsection