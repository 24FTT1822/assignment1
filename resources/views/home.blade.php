@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Highlighted Blogs -->
<section class="mb-10">
    <h2 class="text-2xl font-bold border-b-2 border-green-600 pb-2 mb-6">Highlighted Blogs</h2>
    <div class="grid gap-6 md:grid-cols-2">
        <a href="{{ route('highlighted1') }}" class="block bg-yellow-100 border-2 border-yellow-400 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
            <img src="{{ asset('images/final.jpg') }}" alt="Highlighted Blog 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Sports Houses Results</h3>
                <p>🏆 Satria Crowned Champions at Politeknik Brunei Sports Houses Battle 2025</p>
            </div>
        </a>
        <a href="{{ route('highlighted2') }}" class="block bg-yellow-100 border-2 border-yellow-400 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
            <img src="{{ asset('images/Higher expo.jpeg') }}" alt="Featured Blog 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Higher Expo 2026</h3>
                <p>Higher Expo 2026: Uniting Universities, Inspiring Futures at Politeknik Brunei</p>
            </div>
        </a>
    </div>
</section>

<!-- Latest Blogs -->
<section class="mb-10">
    <h2 class="text-2xl font-bold border-b-2 border-green-600 pb-2 mb-6">Latest Blogs</h2>
    <div class="grid gap-6 md:grid-cols-3">
        <a href="{{ route('latest1') }}" class="block bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/Ramadhan.jpeg') }}" alt="Blog 1" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="text-lg font-semibold mb-1">Embracing the True Spirit of Ramadhan</h3>
            <p>🌙 Strengthening Faith and Discipline: Four Essential Practices for a Meaningful Ramadhan</p>
        </a>
        <a href="{{ route('latest2') }}" class="block bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/art-therapy.jpeg') }}" alt="Blog 2" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="text-lg font-semibold mb-1">Art Therapy Session</h3>
            <p>🎨 Creative Healing: MPPS and GirlsUp Community Join Forces for Art Therapy Session</p>
        </a>
        <a href="{{ route('latest3') }}" class="block bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/hari-kebangsaan-42.jpeg') }}" alt="Blog 3" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="text-lg font-semibold mb-1">Hari Kebangsaan 42 Celebration</h3>
            <p>🇧🇳 Politeknik Brunei Commemorates Hari Kebangsaan 42 with Flag Ceremony and National Anthem</p>
        </a>
    </div>
</section>
@endsection
