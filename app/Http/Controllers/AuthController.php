<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
        ]);

        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'address' => $request->address,
            'contact_number' => $request->contact_number,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
}
        public function login(Request $request)
        {
            $credentials = $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->put('username', Auth::user()->username);

                return redirect()->route('userdashboard'); // Change 'dashboard' to your actual route
            }

            return back()->withErrors(['login' => 'Invalid username or password.']);
        }

        public function index()
        {
            return view('userdashboard'); // Ensure 'userdashboard.blade.php' exists in resources/views
        }

        public function logout()
        {
            Auth::logout();
            return redirect()->route('welcome');
        }

}
