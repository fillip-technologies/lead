<?php

namespace App\Http\Controllers;

use App\Models\Websitedesign;
use Illuminate\Http\Request;

class WebsitedesignController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'message'     => 'required|string|max:255',
            
        ]);
        
         Websitedesign::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
            'source'  => 'campaign', // 👈 ENUM value
        ]);

       

       return redirect()->route('thankyou');
    }

    

   
}
