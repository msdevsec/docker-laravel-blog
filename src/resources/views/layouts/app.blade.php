<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSDevSec Blog - @yield('title')</title>
    
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow mb-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="{{ route('posts.index') }}" class="flex items-center">
                        <span class="text-xl font-bold">MSDevSec</span>
                    </a>
                </div>
                
                <div class="flex items-center">
                    <a href="{{ route('posts.create') }}" 
                       class="bg-blue-500 text-white px-4 py-2 rounded-md">
                        New Post
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4">
        @yield('content')
    </main>
</body>
</html>
