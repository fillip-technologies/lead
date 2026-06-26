<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|email|max:255|unique:usersaccount,email',
            'phone'                 => 'required|string|max:20',
            'location'              => 'required|string|max:255',
            'password'              => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        UserAccount::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'location' => $request->location,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $user = UserAccount::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Invalid email or password.']);
        }

        Session::regenerate();
        Session::put('user_id', $user->id);
        Session::put('user_name', $user->name);

        return redirect()->route('home')->with('success', 'Logged in successfully!');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Session::regenerate();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
