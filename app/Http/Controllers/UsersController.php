<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UserController extends Controller
{
    //
    public function User_profile(){
        return view('User_profile');
    }
    public function submitQuery_User_profile(Request $Request){

    	$mp = new App\UserProfile();
    	$mp->FirstName = $Request->firstname;
    	$mp->LastName = $Request->lastname;
    	$mp->save();
    	return redirect('/');
    }

    
}
