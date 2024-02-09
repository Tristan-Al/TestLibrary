@extends('layouts.default')

@section('content')
    <div class="max-w-2xl mx-auto pb-5">
        <div>
            <h1 class="text-2xl font-bold my-4 inline-block mr-5">Authors</h1>
            <a href="{{ route('authors.create') }}"
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">Add new</a>
        </div>
        @if (count($authors) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Surname</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Nationality</th>
                        <th class="py-2 px-4 border-b">Gender</th>
                        <th class="py-2 px-4 border-b">Age</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $author['id'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $author['surnames'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $author['name'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $author['nationality'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $author['gender'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $author['age'] }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('authors.edit', ['author' => $author->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ route('authors.destroy', ['author' => $author->id]) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        onclick="return confirm('Are you sure you want to delete this author?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $authors->links() }}
            </div>
        @else
            <p> No authors available. </p>
        @endif
    </div>
@endsection
