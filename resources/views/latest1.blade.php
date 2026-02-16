@extends('layouts.app')

@section('title', 'Embracing the True Spirit of Ramadhan')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-10">

    <!-- Category & Date -->
    <p class="text-sm text-emerald-600 font-semibold uppercase tracking-wide">
        Islamic Reflection • Ramadhan 2026
    </p>

    <!-- Headline -->
    <h1 class="text-4xl md:text-5xl font-bold mt-3 leading-tight text-gray-900">
        🌙 Strengthening Faith and Discipline: Four Essential Practices for a Meaningful Ramadhan
    </h1>

    <!-- Author -->
    <p class="text-gray-500 mt-4 text-sm">
        By Politeknik Brunei Islamic Affairs Unit
    </p>

    <!-- Featured Image -->
    <div class="mt-8 mb-10">
        <img src="{{ asset('images/Ramadhan.jpeg') }}"
             alt="Ramadhan Reflection"
             class="w-full h-50 object-cover rounded-xl shadow-lg">
    </div>

    <!-- Article Body -->
    <div class="text-gray-700 leading-relaxed space-y-6 text-lg">

        <p>
            Ramadhan is a sacred month observed by Muslims worldwide — a time of spiritual reflection, 
            self-discipline, and renewed devotion. Beyond fasting from dawn to sunset, this blessed month 
            serves as an opportunity to strengthen one’s relationship with Allah through consistent worship 
            and mindful conduct.
        </p>

        <p>
            While fasting is the foundation of Ramadhan, the true essence of the month lies in improving 
            character, deepening faith, and maintaining discipline in daily life. Here are four key 
            practices that help believers embrace the true spirit of Ramadhan.
        </p>

        <!-- Point 1 -->
        <h2 class="text-2xl font-semibold text-emerald-700 mt-8">
            🕌 1. Performing Prayers at the Right Time
        </h2>

        <p>
            Observing the five daily prayers punctually is essential during Ramadhan. Praying on time 
            strengthens discipline, enhances spiritual awareness, and keeps the heart connected to Allah 
            throughout the day. It serves as a reminder that worship remains central in every moment 
            of life.
        </p>

        <!-- Point 2 -->
        <h2 class="text-2xl font-semibold text-emerald-700 mt-8">
            🤲 2. Avoiding Makruh Actions
        </h2>

        <p>
            In addition to avoiding sinful acts, Muslims are encouraged to refrain from makruh 
            (discouraged) behaviors during Ramadhan. Actions such as unnecessary arguments, gossip, 
            or wasting valuable time can reduce the spiritual reward of fasting. Practicing patience 
            and self-control enhances both the meaning and the reward of this sacred month.
        </p>

        <!-- Point 3 -->
        <h2 class="text-2xl font-semibold text-emerald-700 mt-8">
            🌙 3. Performing Sunat Terawih Prayers
        </h2>

        <p>
            Terawih prayers, performed after the Isha prayer, are a special sunnah unique to Ramadhan. 
            These voluntary nightly prayers offer immense rewards and provide an opportunity for 
            reflection, repentance, and unity within the community. Participating in Terawih strengthens 
            faith and fosters a deeper connection with the Qur’an.
        </p>

        <!-- Point 4 -->
        <h2 class="text-2xl font-semibold text-emerald-700 mt-8">
            👕 4. Wearing Proper and Modest Attire
        </h2>

        <p>
            Ramadhan also emphasizes modesty in both behavior and appearance. Wearing appropriate 
            and respectful attire, especially when attending the mosque, reflects sincerity and 
            reverence for worship. Modesty enhances humility and aligns outward appearance with 
            inner devotion.
        </p>

        <!-- Closing -->
        <h2 class="text-2xl font-semibold text-emerald-700 mt-10">
            ✨ Embracing the Blessings of Ramadhan
        </h2>

        <p>
            Ultimately, Ramadhan is more than abstaining from food and drink — it is a journey of 
            spiritual purification and personal growth. By observing prayers on time, avoiding 
            makruh actions, performing Terawih, and maintaining modest attire, believers can 
            fully embrace the blessings and transformative power of this holy month.
        </p>

    </div>

    <!-- Back Button -->
    <div class="mt-12">
        <a href="{{ route('home') }}"
           class="inline-block bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition">
            ← Back to Home
        </a>
    </div>

</div>

@endsection
