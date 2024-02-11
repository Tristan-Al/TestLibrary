@extends('layouts.default')

@section('content')
    <div class="max-w-2xl mx-auto pb-5">
        <div>
            <h1 class="text-2xl font-bold my-4 inline-block mr-5">Books</h1>
            <a href="{{ route('books.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                Add new
            </a>
        </div>
        @if (count($books) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Author ID</th>
                        <th class="py-2 px-4 border-b">Category</th>
                        <th class="py-2 px-4 border-b">Description</th>
                        <th class="py-2 px-4 border-b">Price</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $book['id'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $book['title'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $book['author_id'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $book['category'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $book['description'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $book['price'] }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('books.edit', ['book' => $book->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $books->links() }}
            </div>
        @else
            <p> No books available. </p>
        @endif
    </div>
@endsection
