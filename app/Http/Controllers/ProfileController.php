<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use DB;
use Auth;
use App\Models\Profile;

class ProfileController extends Controller
{   

    public function insert_profile(Request $request)
    {   
        $Profile = new Profile();
        $Profile ->fullname = $request->input('fullname');
        $Profile ->user_id = Auth()->user()->id;
        $Profile ->student_id = $request->input('student_id');
        $Profile ->level = $request->input('level');
        $Profile ->major = $request->input('major');
        $Profile ->birthday = $request->input('birthday');
        $Profile ->age = $request->input('age');
        $Profile ->address = $request->input('address');
        $Profile ->telephone = $request->input('telephone');
        $Profile ->parent_name = $request->input('parent_name');
        $Profile ->parent_age = $request->input('parent_age');
        $Profile ->parent_work= $request->input('parent_work');
        $Profile ->parent_relationship = $request->input('parent_relationship');
        $Profile ->parent_address = $request->input('parent_address');
        $Profile ->parent_telephone = $request->input('parent_telephone');
        $Profile ->position_work = $request->input('position_work');
        $Profile ->address_work = $request->input('address_work');
        $Profile ->start_internship = $request->input('start_internship');
        $Profile ->end_internship = $request->input('end_internship');
        $Profile ->supervisor = $request->input('supervisor');
        
        //dd($Profile);
        $Profile->save();
        return redirect('profile');  
    }


    public function show_profile()
    {   
        $profile_count = DB::table('student_informations')->where('user_id','=' ,Auth::user()->id)->count();
       
        if($profile_count == 1)
        {   
        $request = DB::table('student_informations')
        ->where('user_id','=',Auth::user()->id)
        ->first();
        
        return view('profile',['request'=>$request]);
        }
        else
        {
            return view('profile_input');
        }
         
    }


    public function update_profile(Request $request,$id)
    {   
        
        $Profile = Profile::find($id);
        $Profile->update($request->all());

        return redirect('profile');
    }



}
