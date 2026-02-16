@extends('layouts.app')

@section('title', 'Hari Kebangsaan 42 Celebration at Politeknik Brunei')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-10">

    <!-- Category & Date -->
    <p class="text-sm text-red-600 font-semibold uppercase tracking-wide">
        National Celebration • 16 February 2026
    </p>

    <!-- Headline -->
    <h1 class="text-4xl md:text-5xl font-bold mt-3 leading-tight text-gray-900">
        🇧🇳 Politeknik Brunei Commemorates Hari Kebangsaan 42 with Flag Ceremony and National Anthem
    </h1>

    <!-- Author -->
    <p class="text-gray-500 mt-4 text-sm">
        By Politeknik Brunei Events Unit
    </p>

    <!-- Featured Image -->
    <div class="mt-8 mb-10">
        <img src="{{ asset('images/hari-kebangsaan-42.jpeg') }}"
             alt="Hari Kebangsaan 42 Celebration"
             class="w-full h-80 object-cover rounded-xl shadow-lg">
    </div>

    <!-- Article Body -->
    <div class="text-gray-700 leading-relaxed space-y-6 text-lg">

        <p>
            Politeknik Brunei proudly celebrated <strong>Hari Kebangsaan 42</strong> today at 
            9:00 AM at the Ong Sum Ping Campus. The morning ceremony was a vibrant demonstration 
            of patriotism, national pride, and unity among students, staff, and officers.
        </p>

        <h2 class="text-2xl font-semibold text-red-700 mt-8">
            🇧🇳 Singing of Lagu Kebangsaan and Flag Raising
        </h2>

        <p>
            The event began with the solemn singing of the <em>Lagu Kebangsaan</em>, followed by 
            the ceremonial raising of the national flag (<em>Berkibarlah Bendera</em>). Students 
            and attendees stood in unison, reflecting on the significance of the day and honoring 
            the nation’s achievements.
        </p>

        <h2 class="text-2xl font-semibold text-red-700 mt-8">
            🎖️ Military Cadets and Officers in Attendance
        </h2>

        <p>
            The ceremony was graced by military cadets and officers who joined the campus community 
            in witnessing the national celebration. Their presence added formality and respect to 
            the proceedings, highlighting the collaboration between educational and defense institutions.
        </p>

        <h2 class="text-2xl font-semibold text-red-700 mt-8">
            🚩 Leadership of Club Cadet Hakim
        </h2>

        <p>
            The flag-bearing ceremony was led by <strong>Club Cadet Hakim</strong>, who guided the 
            procession with precision and discipline. The cadet’s leadership exemplified dedication 
            and teamwork, inspiring the audience and fellow students during this important national 
            observance.
        </p>

        <h2 class="text-2xl font-semibold text-red-700 mt-8">
            ✨ A Morning of National Pride
        </h2>

        <p>
            The Hari Kebangsaan 42 celebration at Politeknik Brunei was a memorable morning of patriotism, 
            reflection, and community unity. Students and staff alike left the event with a renewed sense 
            of pride in their nation and appreciation for the values that Hari Kebangsaan represents.
        </p>

    </div>

    <!-- Back Button -->
    <div class="mt-12">
        <a href="{{ route('home') }}"
           class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition">
            ← Back to Home
        </a>
    </div>

</div>

@endsection
