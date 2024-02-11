<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the user.
     */
    public function index()
    {
        $users = User::with('roles')->paginate(7);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // Validate and create user
        $user = User::create(
            [
                'username' => $request->input('username'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'created_at' => now()
            ]
        );

        // Syncronize user roles with selected form inputs
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
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

        $user->roles()->sync($request->input('roles', []));

        // Save user changes
        $user->save();

        return redirect()->route('users.edit', $user)
            ->with('success', 'User updated successfully');
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
