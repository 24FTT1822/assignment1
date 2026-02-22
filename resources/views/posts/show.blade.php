@extends('layouts.app')
@section('title',$post->title)

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10">
    <h2 class="text-3xl font-bold mb-4">{{ $post->title }}</h2>
    <p class="text-sm text-gray-600 mb-4">Category: {{ $post->category->name }} | Type: {{ $post->type }}</p>
    <img src="{{ asset('images/'.$post->image) }}" class="w-full h-64 object-cover rounded mb-6">
    <p class="text-gray-700">{{ $post->text }}</p>

    <a href="{{ route('posts.index') }}" class="inline-block mt-6 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">← Back</a>
</div>
@endsection