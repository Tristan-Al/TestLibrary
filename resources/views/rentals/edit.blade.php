@extends('layouts.default')

@section('title', 'Edit Rental')

@section('content')
    <div class="max-w-2xl mx-auto px-5">
        <h1 class="text-2xl font-bold my-4">Edit Rental</h1>

        @if ($errors->any())
            <div class="alert alert-danger text-red-500 pb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('rentals.update', ['rental' => $rental->id]) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-600">ID</label>
                <input type="text" id="id" name="id" value="{{ $rental->id }}"
                    class="mt-1 p-2 w-full border rounded-md" readonly>
            </div>

            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-600">User ID</label>
                <input type="number" step="1" name="user_id" id="user_id" value="{{ $rental->user_id }}"
                    class="mt-1 p-2 w-full border rounded-md" placeholder="Enter User ID">
            </div>

            <div class="mb-4">
                <label for="book_id" class="block text-sm font-medium text-gray-600">Book ID</label>
                <input type="text" name="book_id" id="book_id" value="{{ $rental->book_id }}"
                    class="mt-1 p-2 w-full border rounded-md" placeholder="Enter Book ID">
            </div>

            <div class="mb-4">
                <label for="rental_date" class="block text-sm font-medium text-gray-600">Rental Date</label>
                <input type="date" name="rental_date" id="rental_date"
                    value="{{ $rental->rental_date->format('Y-m-d') }}" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="return_date" class="block text-sm font-medium text-gray-600">Return Date</label>
                <input type="date" name="return_date" id="return_date"
                    value="{{ $rental->return_date ? $rental->return_date->format('Y-m-d') : '' }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this rental?')">Save</button>
            </div>
        </form>
    </div>
@endsection
