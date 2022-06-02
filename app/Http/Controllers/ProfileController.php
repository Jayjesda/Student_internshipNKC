<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function input_profile()
    {
        return view('profile_input');
    }

    public function show_profile()
    {
         return view('profile');
    }
}
