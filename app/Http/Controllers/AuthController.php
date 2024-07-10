<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Go to the registration page
    public function go_to_register()
    {
        if (Auth::check()) {
            return redirect('/Dashboard');
        }
        return view('Auth.Register');
    }
    // Register a new user
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            ],
            'phone' => 'required|numeric',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
        ]);

        // Redirect to a different page or show a success message
        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    // Go to the login page
    public function go_to_login()
    {
        if (Auth::check()) {
            return redirect('/Dashboard');
        }
        return view('Auth.Login');
    }
    // Log the user in
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if ($user = auth()->attempt($request->only('email', 'password'))) {
            // Redirect to a different page
            $user = auth()->user();
            session(['user_id' => $user->id]);
            session(['user_email' => $user->email]);
            session(['user_name' => $user->name]);
            session(['user_phone' => $user->phone]);

            return redirect('/Dashboard');
        }

        // Redirect back to the login page
        return back()->with('error', 'Invalid login credentials');
    }

    // Log the user out
    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
