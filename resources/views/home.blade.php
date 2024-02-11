@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Test Library</h1>
            <p class="text-gray-600 mb-8">Your go-to place for books and more!</p>

            <a href="{{ route('authors.index') }}"
                class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600">Explore Authors</a>
            <a href="{{ route('books.index') }}"
                class="ml-4 bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Discover Books</a>
            <a href="{{ route('users.index') }}"
                class="ml-4 bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600">Browse Users</a>
            <a href="{{ route('rentals.index') }}"
                class="ml-4 bg-red-500 text-white px-6 py-3 rounded-md hover:bg-red-600">Check
                Rentals</a>
        </div>
    </div>
@endsection
