<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {      
        //$request = DB::table('student_informations')
        //->where('user_id','=' ,Auth::user()->id);

        $profile_count = DB::table('student_informations')->where('user_id','=' ,Auth::user()->id)->count();
        
        if($profile_count == 1)
        { 
            return view('home');
        }
        else
        {   
            return view('profile_input');
        }

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
}
