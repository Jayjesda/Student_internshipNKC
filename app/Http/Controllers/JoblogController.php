<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class joblogController extends Controller
{
    public function create_joblogs()
    {   
        
        return view('joblogs_create');
    }

    
    public function history_joblogs()
    {
        return view('joblogs_history');
    }
    
}


