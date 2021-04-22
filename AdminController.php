<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\program;

use Auth;
class AdminController extends Controller
{
    public function index()
    {
    	$user = program::all();
    	//below commented lines are used to check which value $user is containing
    	 // $usr = $user->program->program;
    	 //  dd($user);
    
    	return view('admin',compact('user'));
    	
    }


    public function store(Request $request)
    {
    	
    	$user = new program;
        $user->program = $request->program;
         
        $user->user_id = $request->user()->id;
         $user->save();
       
         
    	}

}
