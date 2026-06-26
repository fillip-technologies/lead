<?php

namespace App\Http\Controllers;

use App\Models\Digitalmarketing;
use Illuminate\Http\Request;

class DigitalmarketingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'message'     => 'required|string|max:255',
            
        ]);

        Digitalmarketing::create($request->all());

        return redirect()->back()->with('success', 'Form submitted successfully.');
    }

    

   
}
