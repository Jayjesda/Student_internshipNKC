<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Joblog;


class joblogController extends Controller
{
    

    public function show_joblog()
    {   
        $profile_count = DB::table('student_informations')->where('user_id','=' ,Auth::user()->id)->count();
       
        if($profile_count == 1)
        {   
        $request = DB::table('student_informations')
        ->where('user_id','=',Auth::user()->id)
        ->first();
        
        //dd($request);
        return view('joblogs_create',['request'=>$request]);
        }
        else
        {
            return view('profile_input');
        }
       
    }

    public function history_joblogs()
    {   
        $profile_count = DB::table('student_informations')->where('user_id','=' ,Auth::user()->id)->count();
        if($profile_count == 1)
        {   
        $request = DB::table('student_informations')
        ->where('user_id','=',Auth::user()->id)
        ->first();
        
        return view('joblogs_history',['request'=>$request]);
        }
        else
        {
            return view('profile_input');
        }
        

        $data = Joblog::all();
        return view('joblogs_history',['joblogs'=>$data]);
    }

    public function insert_joblog(Request $request)
    {
        $Joblog = new Joblog();
        $Joblog ->user_id = Auth()->user()->id;
        $Joblog ->Date = $request->input('Date');
        $Joblog ->Title = $request->input('Title');
        $Joblog ->Details = $request->input('Details');
        $Joblog ->Time_start = $request->input('Time_start');
        $Joblog ->Time_end = $request->input('Time_end');
        //$Joblog ->images = $request->input('images');
        $Joblog ->approved_status = 0;
        $Joblog ->save();
        
        return redirect('joblog-history');  
    }
    
    public function showdatahisory_joblog(Request $request)
    {
       
    }
    
   
}


