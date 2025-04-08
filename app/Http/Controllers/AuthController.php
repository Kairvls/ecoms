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

        public function registeed(Request $request)
            {
                $request->validate([
                    'fullname' => 'required|string|max:255',
                    'username' => 'required|string|max:255|unique:users',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                    'address' => 'required|string|max:255',
                    'contact_number' => 'required|string|max:255',
                ]);

                if ($request->fails()) {
                    return response()->json(['success' => false, 'message' => $request->errors()->first()], 422);
                }

                User::create([
                    'fullname' => $request->fullname,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password), // Hash password
                    'address' => $request->address,
                    'contact_number' => $request->contact_number,
                ]);

                return response()->json(['success' => true, 'message' => 'Registration successful!']);
        }

        public function logins(Request $request)
        {
            $credentials = $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);

            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->put('username', Auth::user()->username);

                return redirect()->route('userdashboard')->with('success', 'Successfully Logged In.'); // Change 'dashboard' to your actual route
            }

            return back()->withErrors(['login' => 'Invalid username or password.']);
        }

        public function login(Request $request)
        {
            $credentials = $request->only('username', 'password');

            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                return response()->json(['success' => true, 'message' => 'Login successful!']);
            } else {
                return response()->json(['success' => false, 'message' => 'Invalid username or password!'], 401);
            }
        }


        public function updateProfile(Request $request)
            {
                $user = User::find(Auth::id()); // Get the authenticated user

                // Validate input
                $request->validate([
                    'fullname' => 'required|string|max:255',
                    'username' => 'required|string|max:255|unique:users,username,' . $user->id,
                    'contact_number' => 'required|string|max:20',
                    'address' => 'required|string|max:255',
                    'current_password' => 'nullable|string',
                    'new_password' => 'nullable|string|min:6|confirmed',
                ]);

                // Check if the user wants to update the password
                if ($request->filled('current_password')) {
                    if (!Hash::check($request->current_password, $user->password)) {
                        return back()->withErrors(['current_password', 'new_password' => 'Current password is incorrect.']);
                    }

                    $user->password = Hash::make($request->new_password);
                }

                // Update user profile details
                $user->update([
                    'fullname' => $request->fullname,
                    'username' => $request->username,
                    'contact_number' => $request->contact_number,
                    'address' => $request->address,
                ]);

                return redirect()->route('userdashboard')->with('success', 'Your password has been updated successfully!');
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
