@extends('layouts.default')

@section('title', 'New Book')

@section('content')
    <div class="max-w-2xl mx-auto px-5">
        <h1 class="text-2xl font-bold my-4">New Book</h1>

        @if ($errors->any())
            <div class="alert alert-danger text-red-500 pb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="author_id" class="block text-sm font-medium text-gray-600">Author</label>
                <input type="number" step="1" name="author_id" id="author_id"
                    class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-600">Category</label>
                <input type="text" name="category" id="category" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                <input type="text" name="description" id="description" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                <input type="number" step=".01" min="1" name="price" id="price"
                    class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to create this book?')">Save</button>
            </div>
        </form>
    </div>
@endsection
