@extends('layouts.default')

@section('content')
    <div class="max-w-2xl mx-auto pb-5">
        <div>
            <h1 class="text-2xl font-bold my-4 inline-block mr-5">Users</h1>
            <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                Add new
            </a>
        </div>
        @if (count($users) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">User Name</th>
                        <th class="py-2 px-4 border-b">Phone</th>
                        <th class="py-2 px-4 border-b">Admin</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->username }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->phone }}</td>
                            <td class="py-2 px-4 border-b">#</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        @else
            <p> No users available. </p>
        @endif
    </div>
@endsection
