@extends('layouts.default')

@section('title', 'Register')

@section('content')
    <div class="max-w-2xl mx-auto px-5">
        <h1 class="text-2xl font-bold my-4">Register a new account</h1>

        @if ($errors->any())
            <div class="alert alert-danger text-red-500 pb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">User Name</label>
                <input type="text" name="username" id="username" class="mt-1 p-2 w-full border rounded-md"
                    placeholder="Enter User Name" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password (8 Characters, 1 Uppercase, 1
                    Number and 1 Special Character)</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md"
                    placeholder="Enter Password" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-600">Phone Number (Optional)</label>
                <input type="text" name="phone" id="phone" class="mt-1 p-2 w-full border rounded-md"
                    placeholder="Enter Phone Number">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="roles">
                    Roles
                </label>
                @foreach ($roles as $role)
                    <div class="flex items-center">
                        <input type="checkbox" id="role{{ $role->id }}" name="roles[]" value="{{ $role->id }}">
                        <label for="role{{ $role->id }}" class="ml-2">{{ $role->rolename }}</label>
                    </div>
                @endforeach
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to create this user?')">Register</button>
            </div>
        </form>
    </div>
@endsection
