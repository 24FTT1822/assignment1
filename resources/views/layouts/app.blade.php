<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Policonnect Post')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --pb-blue: #0051BA;
            --pb-red: #E30613;
        }

        .banner-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            z-index: 0;
            transform: rotate(45deg);
        }
        .shape-blue {
            background: linear-gradient(135deg, var(--pb-blue), #0073E6);
        }
        .shape-red {
            background: linear-gradient(135deg, var(--pb-red), #FF4C4C);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Header / Banner -->
    <header class="relative overflow-hidden py-16 md:py-20">
        <div class="absolute inset-0 bg-[var(--pb-blue)]"></div>
        <div class="absolute inset-0 bg-[var(--pb-red)]/20"></div>

        <div class="banner-shape shape-red w-72 h-72 -top-16 -left-16"></div>
        <div class="banner-shape shape-red w-56 h-56 -bottom-24 -right-24"></div>
        <div class="banner-shape shape-blue w-96 h-96 -bottom-32 -right-48"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <div class="mb-6 md:mb-0">
                <img src="{{ asset('images/politeknik brueni logo.jpg') }}" 
                     alt="PB Logo" 
                     class="w-30 md:w-40 rounded-md border-4 border-white shadow-lg">
            </div>
            <div class="text-center md:text-left md:ml-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-wide drop-shadow-lg">
                    Policonnect Post
                </h1>
                <p class="mt-3 text-lg md:text-xl text-white/90 font-light drop-shadow-sm">
                    Your hub for Politeknik Brunei news, events, and student life
                </p>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-20">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Left Links -->
            <div class="flex space-x-8">
                <a href="{{ route('home') }}"
                   class="text-[var(--pb-blue)] font-semibold hover:text-[var(--pb-red)] transition">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="text-[var(--pb-blue)] font-semibold hover:text-[var(--pb-red)] transition">
                    About Us
                </a>
                <a href="{{ route('contacts') }}"
                   class="text-[var(--pb-blue)] font-semibold hover:text-[var(--pb-red)] transition">
                    Contacts
                </a>
            </div>

            <!-- Right Auth Section -->
            <div class="flex items-center space-x-4 md:space-x-6">

                <!-- Guest: Login/Register -->
                @guest
                    <a href="{{ route('login') }}"
                       class="font-semibold text-[var(--pb-blue)] hover:text-[var(--pb-red)] transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-4 py-2 rounded-md bg-[var(--pb-red)] text-white font-semibold hover:bg-red-700 transition">
                        Register
                    </a>
                @endguest

                <!-- Authenticated User: Dashboard/Logout -->
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="font-semibold text-[var(--pb-blue)] hover:text-[var(--pb-red)] transition">
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="px-4 py-2 rounded-md bg-gray-200 hover:bg-gray-300 font-semibold transition">
                            Logout
                        </button>
                    </form>
                @endauth

            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6 md:p-10 space-y-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[var(--pb-blue)] text-white py-10 mt-12 text-center">
        <p class="mb-2 text-lg">&copy; 2026 Policonnect Post. All Rights Reserved.</p>
        <p class="text-sm">
            Follow us on 
            <span class="font-semibold text-[var(--pb-red)]">Instagram</span>, 
            <span class="font-semibold text-[var(--pb-red)]">Facebook</span>, and 
            <span class="font-semibold text-[var(--pb-red)]">Twitter</span>
        </p>
    </footer>

</body>
</html>