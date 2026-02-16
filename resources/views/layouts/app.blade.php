<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Policonnect Post')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --pb-blue: #0051BA; /* Politeknik Brunei blue */
            --pb-red: #E30613;  /* Politeknik Brunei red */
        }

        /* Decorative shapes in banner */
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
        <!-- Banner background with slight red overlay -->
        <div class="absolute inset-0 bg-[var(--pb-blue)]"></div>
        <div class="absolute inset-0 bg-[var(--pb-red)]/20"></div> <!-- red overlay for more presence -->

        <!-- Decorative shapes -->
        <div class="banner-shape shape-red w-72 h-72 -top-16 -left-16"></div> <!-- bigger red shape -->
        <div class="banner-shape shape-red w-56 h-56 -bottom-24 -right-24"></div>
        <div class="banner-shape shape-blue w-96 h-96 -bottom-32 -right-48"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <!-- Logo -->
            <div class="mb-6 md:mb-0">
                <img src="images/politeknik brueni logo.jpg" alt="PB Logo" class="w-30 md:w-40 rounded-md border-4 border-white shadow-lg">
            </div>

            <!-- Title and tagline -->
            <div class="text-center md:text-left md:ml-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-wide drop-shadow-lg">Policonnect Post</h1>
                <p class="mt-3 text-lg md:text-xl text-white/90 font-light drop-shadow-sm">Your hub for Politeknik Brunei news, events, and student life</p>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="flex justify-center space-x-10 py-5 bg-white shadow-md sticky top-0 z-20">
        <a href="{{ route('home') }}" class="text-[var(--pb-blue)] font-semibold hover:text-[var(--pb-red)] transition-colors">Home</a>
        <a href="{{ route('about') }}" class="text-[var(--pb-blue)] font-semibold hover:text-[var(--pb-red)] transition-colors">About Us</a>
        <a href="{{ route('contacts') }}" class="text-[var(--pb-blue)] font-semibold hover:text-[var(--pb-red)] transition-colors">Contacts</a>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6 md:p-10 space-y-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[var(--pb-blue)] text-white py-10 mt-12 text-center">
        <p class="mb-2 text-lg">&copy; 2026 Policonnect Post. All Rights Reserved.</p>
        <p class="text-sm">Follow us on 
            <span class="font-semibold text-[var(--pb-red)]">Instagram</span>, 
            <span class="font-semibold text-[var(--pb-red)]">Facebook</span>, and 
            <span class="font-semibold text-[var(--pb-red)]">Twitter</span>
        </p>
    </footer>

</body>
</html>
