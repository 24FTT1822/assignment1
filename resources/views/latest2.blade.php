@extends('layouts.app')

@section('title', 'Creative Art Therapy Session with MPPS and GirlsUp Community')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-10">

    <!-- Category & Date -->
    <p class="text-sm text-pink-600 font-semibold uppercase tracking-wide">
        Community Arts • February 2026
    </p>

    <!-- Headline -->
    <h1 class="text-4xl md:text-5xl font-bold mt-3 leading-tight text-gray-900">
        🎨 Creative Healing: MPPS and GirlsUp Community Join Forces for Art Therapy Session
    </h1>

    <!-- Author -->
    <p class="text-gray-500 mt-4 text-sm">
        By Politeknik Brunei Arts & Wellness Team
    </p>

    <!-- Featured Image -->
    <div class="mt-8 mb-10">
        <img src="{{ asset('images/art-therapy.jpeg') }}"
             alt="Art Therapy Session"
             class="w-full h-80 object-cover rounded-xl shadow-lg">
    </div>

    <!-- Article Body -->
    <div class="text-gray-700 leading-relaxed space-y-6 text-lg">

        <p>
            In a vibrant display of creativity and mindfulness, the students of MPPS collaborated 
            with the GirlsUp Community for a unique <strong>Art Therapy Session</strong>. The event 
            focused on self-expression, stress relief, and promoting mental well-being through 
            painting and other creative arts.
        </p>

        <p>
            Participants were guided by experienced facilitators who encouraged them to explore 
            their emotions and thoughts through colors, shapes, and textures. The session highlighted 
            the therapeutic benefits of art, allowing attendees to relax, reflect, and connect with 
            one another in a supportive environment.
        </p>

        <h2 class="text-2xl font-semibold text-pink-700 mt-8">
            🖌️ Creating Together
        </h2>

        <p>
            Students from MPPS and members of GirlsUp Community worked side by side, creating 
            imaginative paintings that reflected personal experiences, hopes, and creativity. 
            Each artwork told a story, turning the session into a collective expression of 
            community spirit and emotional exploration.
        </p>

        <h2 class="text-2xl font-semibold text-pink-700 mt-8">
            🌟 Benefits of Art Therapy
        </h2>

        <p>
            The session emphasized how art can serve as a therapeutic outlet for stress, anxiety, 
            and emotional challenges. Engaging in creative processes improves focus, encourages 
            self-reflection, and strengthens mental resilience. Participants reported feeling 
            more relaxed and inspired after expressing themselves through painting.
        </p>

        <h2 class="text-2xl font-semibold text-pink-700 mt-8">
            🤝 Building Community Connections
        </h2>

        <p>
            Beyond personal expression, the Art Therapy session fostered teamwork and social bonding. 
            MPPS students and GirlsUp members shared techniques, discussed ideas, and provided 
            encouragement, creating a nurturing and collaborative atmosphere. It reinforced the 
            value of community support and collective well-being.
        </p>

        <h2 class="text-2xl font-semibold text-pink-700 mt-8">
            ✨ A Colorful, Mindful Experience
        </h2>

        <p>
            The Creative Art Therapy event was not only a celebration of artistic talent but also 
            a reminder of the importance of mental health and mindfulness in student life. By 
            combining creativity with emotional expression, participants left feeling rejuvenated, 
            inspired, and connected.
        </p>

    </div>

    <!-- Back Button -->
    <div class="mt-12">
        <a href="{{ route('home') }}"
           class="inline-block bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition">
            ← Back to Home
        </a>
    </div>

</div>

@endsection
