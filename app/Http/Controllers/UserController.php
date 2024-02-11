<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the user.
     */
    public function index()
    {
        $users = User::paginate(7);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // New instance of User
        $user = new User();

        // Set form values to user model
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->created_at = now();

        // Save user in db
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Set new values to user
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');

        // Update password if a new one has been provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Save user changes
        $user->save();

        return redirect()->route('users.edit', ['user' => $user]);
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
