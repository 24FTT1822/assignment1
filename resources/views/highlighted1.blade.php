@extends('layouts.app')

@section('title', 'Satria Crowned Champions')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-10">

    <!-- Article Category & Date -->
    <p class="text-sm text-green-600 font-semibold uppercase tracking-wide">
        Sports News • November 2025
    </p>

    <!-- Headline -->
    <h1 class="text-4xl md:text-5xl font-bold mt-3 leading-tight text-gray-900">
        🏆 Satria Crowned Champions at Politeknik Brunei Sports Houses Battle 2025
    </h1>

    <!-- Author -->
    <p class="text-gray-500 mt-4 text-sm">
        By Politeknik Brunei Media Team
    </p>

    <!-- Featured Image -->
    <div class="mt-8 mb-10">
        <img src="{{ asset('images/final.jpg') }}"
             alt="Politeknik Brunei Sports Houses Battle"
             class="w-full h-80 object-cover rounded-xl shadow-lg">
    </div>

    <!-- Article Body -->
    <div class="text-gray-700 leading-relaxed space-y-6 text-lg">

        <p>
            The spirit of competition, unity, and sportsmanship was on full display as 
            Politeknik Brunei hosted its highly anticipated annual Sports Houses Battle, 
            featuring four formidable houses — <strong>Satria, Hulubalang, Perwira, and Nakhoda</strong>.
            Students gathered proudly in their house colors, filling the stadium with energy 
            and excitement as the competition unfolded.
        </p>

        <p>
            From the opening whistle, it was evident that this year’s edition would be one 
            of the most intense yet. Events ranging from track races and relays to football, 
            netball, tug-of-war, and strategic team challenges tested both physical strength 
            and teamwork.
        </p>

        <h2 class="text-2xl font-semibold text-green-700 mt-8">
            🔥 A Fierce Start to the Competition
        </h2>

        <p>
            Hulubalang impressed spectators with explosive speed in the 100m sprint, while 
            Perwira showcased endurance dominance in long-distance events. Nakhoda demonstrated 
            sharp strategy in team-based challenges, collecting valuable early points.
        </p>

        <p>
            Yet it was Satria’s consistent performance across nearly all events that set them apart. 
            Their seamless coordination in relay races and commanding presence in tug-of-war 
            electrified the crowd, with chants echoing across the field.
        </p>

        <h2 class="text-2xl font-semibold text-green-700 mt-8">
            💪 The Decisive Turning Point
        </h2>

        <p>
            The competition tightened as Satria and Hulubalang battled closely on the scoreboard. 
            The turning point came during the final football match and mixed relay challenge, 
            where Satria secured consecutive victories to edge ahead.
        </p>

        <p>
            Their discipline under pressure and collective teamwork proved decisive. Every member 
            contributed crucial points, reflecting the unity that defined their campaign.
        </p>

        <!-- Scoreboard Section -->
        <div class="mt-10">
            <h2 class="text-2xl font-semibold text-green-700 mb-4">
                📊 Final Scoreboard
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-left">
                    <thead class="bg-green-700 text-white">
                        <tr>
                            <th class="px-6 py-3">House</th>
                            <th class="px-6 py-3">Points</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-base">
                        <tr class="border-b">
                            <td class="px-6 py-3 font-bold text-yellow-600">🥇 Satria</td>
                            <td class="px-6 py-3 font-bold">320</td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-3">🥈 Hulubalang</td>
                            <td class="px-6 py-3">295</td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-3">🥉 Perwira</td>
                            <td class="px-6 py-3">270</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Nakhoda</td>
                            <td class="px-6 py-3">250</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2 class="text-2xl font-semibold text-green-700 mt-10">
            🎉 A Celebration Beyond Victory
        </h2>

        <p>
            As the final scores were announced, cheers erupted from the Satria supporters. 
            Flags waved high as teammates embraced in celebration of their well-earned triumph. 
            Meanwhile, Hulubalang, Perwira, and Nakhoda displayed admirable sportsmanship, 
            congratulating the champions in true competitive spirit.
        </p>

        <p>
            More than just a contest, the Sports Houses Battle reinforced the values of leadership, 
            perseverance, and unity among students. While only one house claimed the trophy, 
            the entire Politeknik Brunei community emerged stronger together.
        </p>

    </div>

    <!-- Back Button -->
    <div class="mt-12">
        <a href="{{ route('home') }}"
           class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
            ← Back to Home
        </a>
    </div>

</div>

@endsection
