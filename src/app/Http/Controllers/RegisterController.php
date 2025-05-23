<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register'); // Assumes the HTML is in resources/views/register.blade.php
    }

    public function register(Request $request)
    {
        // Existing registration logic
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();

            if ($user) {
                // User exists, log them in
                Auth::login($user, true);
                return redirect()->intended('/dashboard');
            }

            // Create new user
            $newUser = User::create([
                'first_name' => $googleUser->name, // Google may not split first/last name
                'last_name' => null, // Adjust if you can extract last name
                'email' => $googleUser->email,
                'password' => Hash::make(uniqid()), // Random password since not needed
                'google_id' => $googleUser->id, // Optional: store Google ID
            ]);

            Auth::login($newUser, true);
            return redirect()->intended('/dashboard');
        } catch (\Exception $e) {
            return redirect('/register')->with('error', 'Google registration failed. Please try again.');
        }
    }
}
