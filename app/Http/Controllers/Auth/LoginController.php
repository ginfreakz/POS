<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the request input
        $request->validate([
            'user_id' => 'required|string',
            'password' => 'required|string',
        ]);

        // Credentials array for authentication
        $credentials = [
            'user_id' => $request->user_id,  // use 'user_id' as the username field
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Redirect to intended route if successful
            return redirect()->intended('dashboard');
        }

        // If login fails, throw a validation exception
        throw ValidationException::withMessages([
            'user_id' => [__('The provided credentials do not match our records.')],
        ]);
    }

    // Handle user logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
