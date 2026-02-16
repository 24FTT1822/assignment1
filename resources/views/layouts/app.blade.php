<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'A day in the life of a student')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-green-600 text-white py-6">
        <h1 class="text-3xl font-bold text-center">A day in the life of a student</h1>
    </header>

    <!-- Navigation -->
    <nav class="flex justify-center space-x-6 py-4 bg-white shadow-md">
        <a href="{{ route('home') }}" class="text-green-600 font-semibold hover:underline">Home</a>
        <a href="{{ route('about') }}" class="text-green-600 font-semibold hover:underline">About Us</a>
        <a href="{{ route('contacts') }}" class="text-green-600 font-semibold hover:underline">Contacts</a>
    </nav>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto p-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-10 text-center">
        &copy; 2026 A day in the life of a student. All Rights Reserved.
    </footer>

</body>
</html>
