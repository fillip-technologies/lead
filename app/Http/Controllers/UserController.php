<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'location'    => 'required|string|max:255',
            'password'    => 'required|string|max:50',
           
        ]);

        UserAccount::create($request->all());

        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $user = UserAccount::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No account found with this email.']);
        }

        if ($request->password !== $user->password) {
            return back()->withErrors(['password' => 'Incorrect password.']);
        }

        // Save user session
        Session::put('user', $user);

        return redirect('/home')->with('success', 'Logged in successfully!');
    }


    

   
}
