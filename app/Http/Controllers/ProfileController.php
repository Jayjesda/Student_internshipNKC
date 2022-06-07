<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;

class ProfileController extends Controller
{   

    public function input_profile()
    {   
       return view('profile_input');
    }

    public function profile_Update($request)
    {   
       
    }


    public function show_profile()
    {      
        $request = DB::table('student_informations')
        ->where('user_id','=',Auth::user()->id)
        
        ->first();
        //  dd($request);
        return view('profile',['request'=>$request]);
        
    }
}
