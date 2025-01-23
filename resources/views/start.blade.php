<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Welcome Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="text-center min-h-screen flex flex-col justify-center items-center">
                <h1 class="text-6xl font-bold mb-8">Welcome to Edu-Course Manager</h1>
                <p class="text-lg text-gray-400 mb-12">Your gateway to managing and exploring courses effectively.</p>
        
                <div class="space-x-4">
                    <a href="{{ route('login') }}" class="px-8 py-3 bg-white text-black font-medium rounded-lg shadow-lg hover:bg-gray-200 transition">Login</a>
                    <a href="{{ route('register') }}" class="px-8 py-3 bg-gray-700 text-white font-medium rounded-lg shadow-lg hover:bg-gray-600 transition">Register</a>
                </div>
            </div>
        </div>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
