@extends('layouts.default')

@section('title', 'Edit author')

@section('content')
    <div class="max-w-2xl mx-auto px-5">
        <h1 class="text-2xl font-bold my-4">Edit Author</h1>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('authors.update', ['author' => $author->id]) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-600">ID</label>
                <input type="text" id="id" name="id" value="{{ $author->id }}"
                    class="mt-1 p-2 w-full border rounded-md" readonly>
            </div>

            <div class="mb-4">
                <label for="surnames" class="block text-sm font-medium text-gray-600">Surnames</label>
                <input type="text" name="surnames" id="surnames" value="{{ $author->surnames }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" value="{{ $author->name }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="nationality" class="block text-sm font-medium text-gray-600">Nationality</label>
                <input type="text" name="nationality" id="nationality" value="{{ $author->nationality }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-600">Gender</label>
                <input type="text" name="gender" id="gender" value="{{ $author->gender }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-600">Age</label>
                <input type="text" name="age" id="age" value="{{ $author->age }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this author?')">Save</button>
            </div>
        </form>
    </div>
@endsection
