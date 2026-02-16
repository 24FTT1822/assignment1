@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-10">

    <!-- Image Banner -->
    <div class="mb-8">
        <img src="{{ asset('images/Higher expo.jpeg') }}"
             alt="Higher Expo 2026"
             class="w-full h-80 object-cover rounded-xl shadow-lg">
    </div>

    <!-- Article Header -->
    <div class="mb-6">
        <p class="text-sm text-blue-600 font-semibold uppercase tracking-wide">
            Education News • March 2026
        </p>

        <h1 class="text-4xl font-bold text-gray-900 mt-2 leading-tight">
            Higher Expo 2026: Uniting Universities, Inspiring Futures at Politeknik Brunei
        </h1>

        <p class="text-gray-500 mt-3 text-sm">
            By Politeknik Brunei Media Team
        </p>
    </div>

    <!-- Article Content -->
    <div class="prose max-w-none text-gray-700 leading-relaxed">

        <p class="text-lg">
            Politeknik Brunei proudly hosted <strong>Higher Expo 2026</strong>, a dynamic
            education exhibition that brought together universities, colleges, and higher
            learning institutions from across the region. The event provided students with
            direct access to academic representatives, scholarship information, and
            professional guidance — all under one roof.
        </p>

        <p>
            The campus was transformed into an energetic hub of opportunity as students
            explored booths, attended sharing sessions, and engaged in meaningful discussions
            about their academic futures. Representatives from various institutions offered
            detailed explanations about programmes, campus life, and industry pathways.
        </p>

        <h2 class="text-2xl font-semibold mt-8 mb-3">Participating Institutions</h2>

        <ul class="list-disc list-inside space-y-2">
            <li>Universiti Brunei Darussalam (UBD)</li>
            <li>Universiti Teknologi Brunei (UTB)</li>
            <li>Kolej Universiti Perguruan Ugama Seri Begawan (KUPU SB)</li>
            <li>International universities from Malaysia and Singapore</li>
        </ul>

        <p class="mt-6">
            Each institution provided brochures, consultations, and live explanations
            about admissions and scholarship requirements. Students were able to compare
            programmes, understand entry pathways, and discover opportunities that aligned
            with their ambitions.
        </p>

        <h2 class="text-2xl font-semibold mt-8 mb-3">Event Highlights</h2>

        <p>
            The expo featured an officiated opening ceremony, alumni sharing sessions,
            scholarship briefings, and interactive booth activities. The atmosphere
            throughout the day was vibrant and inspiring, reflecting Politeknik Brunei’s
            commitment to empowering students through knowledge and collaboration.
        </p>

        <p>
            Higher Expo 2026 concluded with overwhelmingly positive feedback from both
            students and participating institutions. The event successfully strengthened
            partnerships and reinforced Politeknik Brunei’s role as a gateway to academic
            excellence and global opportunities.
        </p>

    </div>

    <!-- Back Button at Bottom Left -->
    <div class="mt-10">
        <a href="{{ route('home') }}"
           class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg transition">
            ← Back to Home
        </a>
    </div>

</div>

@endsection

