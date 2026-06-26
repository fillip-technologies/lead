<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'message'     => 'required|string|max:255',
            
        ]);

        Socialmedia::create($request->all());

        return redirect()->back()->with('success', 'Form submitted successfully.');
    }

    

   
}
