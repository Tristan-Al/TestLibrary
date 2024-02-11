@extends('layouts.default')

@section('title', 'New Rental')

@section('content')
    <div class="max-w-2xl mx-auto px-5">
        <h1 class="text-2xl font-bold my-4">New Rental</h1>

        @if ($errors->any())
            <div class="alert alert-danger text-red-500 pb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('rentals.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-600">User ID</label>
                <input type="number" step="1" name="user_id" id="user_id" class="mt-1 p-2 w-full border rounded-md"
                    placeholder="Enter User ID" required>
            </div>

            <div class="mb-4">
                <label for="book_id" class="block text-sm font-medium text-gray-600">Book ID</label>
                <input type="number" step="1" name="book_id" id="book_id" class="mt-1 p-2 w-full border rounded-md"
                    placeholder="Enter Book ID" required>
            </div>

            <div class="mb-4">
                <label for="rental_date" class="block text-sm font-medium text-gray-600">Rental Date</label>
                <input type="date" name="rental_date" id="rental_date" class="mt-1 p-2 w-full border rounded-md"
                    required>
            </div>

            <div class="mb-4">
                <label for="return_date" class="block text-sm font-medium text-gray-600">Return Date</label>
                <input type="date" name="return_date" id="return_date" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to create this rental?')">Save</button>
            </div>
        </form>
    </div>
@endsection
