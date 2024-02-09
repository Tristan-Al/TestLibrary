@extends('layouts.default')

@section('title', 'New Author')

@section('content')
    <div class="max-w-2xl mx-auto px-5">
        <h1 class="text-2xl font-bold my-4">New Author</h1>

        <form action="{{ route('authors.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="surnames" class="block text-sm font-medium text-gray-600">Surnames</label>
                <input type="text" name="surnames" id="surnames" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="nationality" class="block text-sm font-medium text-gray-600">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-600">Gender</label>
                <input type="text" name="gender" id="gender" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-600">Age</label>
                <input type="text" name="age" id="age" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to create this author?')">Save</button>
            </div>
        </form>
    </div>
@endsection
