<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentalRequest;
use App\Models\Rental;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::paginate(7);

        return view('rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rentals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalRequest $request)
    {
        $rental = Rental::create([
            'user_id' => $request->input('user_id'),
            'book_id' => $request->input('book_id'),
            'rental_date' => $request->input('rental_date'),
            'return_date' => $request->input('return_date')
        ]);

        $rental->save();

        return redirect()->route('rentals.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        return view('rentals.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentalRequest $request, Rental $rental)
    {
        $rental->user_id = $request->input('user_id');
        $rental->book_id = $request->input('book_id');
        $rental->rental_date = $request->input('rental_date');
        $rental->return_date = $request->input('return_date');

        $rental->save();

        return redirect()->route('rentals.edit', $rental)
            ->with('success', 'Rental updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rentals.index');
    }
}
