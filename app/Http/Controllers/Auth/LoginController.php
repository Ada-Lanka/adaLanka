<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Entire login logic is included here
     */
    public function showLoginForm()
    {
        // If already logged in and the user is an admin, redirect them directly to the admin post creating page.
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect('/admin/add_news2');
        }

        // Otherwise, show the login view for admins to login
        return view('auth.login');
    }

    /**
     * Handle the login request from the form submission.
     * Supports login via either email or username and handles "remember me" functionality.
     */
    public function login(Request $request)
    {
        // Validate inputs are provided and are strings
        $credentials = $request->validate([
            'login' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Determine whether the user is trying to log in using an email or a username
        $loginType = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Check if the "remember me" checkbox was selected by the user
        $remember = $request->has('remember');

        // Attempt to authenticate using the provided email or username
        if (Auth::attempt([$loginType => $credentials['login'], 'password' => $credentials['password']], $remember)) {
            // If the user has a role of 'admin', redirect them to the admin post creating page
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/add_news2');
            } else {
                // If the user is authenticated but not an admin, log them out immediately
                Auth::logout();
                return redirect('/')->with('error', 'Access denied. Not an admin.');
            }
        }

        // If authentication fails, redirect back to the homepage with an error message
        return redirect('/')->with('error', 'Invalid credentials.');
    }

    /**
     * Logs out the authenticated user and redirects to the home.
     */
    public function logout()
    {
        // Log the user out by clearing the session and removing authentication
        Auth::logout();

        return redirect('/');
    }
}
