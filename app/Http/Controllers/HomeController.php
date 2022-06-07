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

        $subscription_count = DB::table('student_informations')->where('pid_user',$pid_user)->count();

        //check if any subscription plan exists
        if($subscription_count == 0)
        { 
          //record does not exist 
        }else{
          //record exists 
        }

        //dd($request);
        //return view ('home');
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
