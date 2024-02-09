<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    /**
     * Display a listing of the book.
     */
    public function index()
    {
        $books = Book::paginate(7);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(BookRequest $request)
    {
        Book::create($request->validated());

        return redirect()->route('books.index');
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(BookRequest $request, string $id): RedirectResponse
    {
        $book = Book::findOrFail($id);

        $book->update($request->validated());

        return redirect()->route('books.edit', ['book' => $book->id]);
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('books.index');
    }
}
