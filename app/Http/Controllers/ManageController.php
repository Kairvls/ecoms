<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function manageAccounts()
    {
        $users = User::select('id', 'fullname', 'username', 'contact_number', 'address')->get(); 
        return view('manage-accounts', compact('users'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        // Create a new user
        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'email' => $request->username . '@example.com', // Auto-generate email
            'password' => Hash::make('defaultpassword'), // Ensure password is hashed
        ]);

        // Redirect back to the manage accounts page with success message
        return redirect()->route('manage.accounts')->with('success', 'User added successfully!');
    }
}
