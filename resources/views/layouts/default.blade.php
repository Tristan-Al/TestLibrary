<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Tailwind styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}">
                <h1 class="text-white text-2xl font-semibold">Test Library</h1>
            </a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}" class="text-white hover:text-gray-400">Home</a></li>
                    <li><a href="{{ route('authors.index') }}" class="text-white hover:text-gray-400">Authors</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400">Books</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400">Users</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400">Rentals</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
</body>

</html>
