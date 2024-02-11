@extends('layouts.default')

@section('content')
    <div class="max-w-2xl mx-auto pb-5">
        <div>
            <h1 class="text-2xl font-bold my-4 inline-block mr-5">Rentals</h1>
            <a href="{{ route('rentals.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                Add new
            </a>
        </div>
        @if (count($rentals) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">User ID</th>
                        <th class="py-2 px-4 border-b">Book ID</th>
                        <th class="py-2 px-4 border-b">Rental Date</th>
                        <th class="py-2 px-4 border-b">Return Date</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rentals as $rental)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $rental->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $rental->user_id }}</td>
                            <td class="py-2 px-4 border-b">{{ $rental->book_id }}</td>
                            <td class="py-2 px-4 border-b">{{ $rental->rental_date->format('m-d-Y') }}</td>
                            <td class="py-2 px-4 border-b">
                                {{ $rental->return_date ? $rental->return_date->format('m-d-Y') : 'No returned' }}
                            </td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('rentals.edit', ['rental' => $rental->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ route('rentals.destroy', ['rental' => $rental->id]) }}" method="POST"
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
                {{ $rentals->links() }}
            </div>
        @else
            <p> No rental available.</p>
        @endif
    </div>
@endsection
