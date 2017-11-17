<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class DebatesController extends Controller
{
    //
    public function debate_list(){
    	return view('debate_list');
    }
    public function add_debate(){
    	return view('add_debate');
    }

    public function debate_argument(){
    	return view('debate_argument');
    }

    public function submitQuery_debate(Request $Request){
    	$mp = new App\Debate();
    	$mp->title = $Request->title;
    	$mp->slug = 'abcd';
    	$mp->topic_id = 3;
    	$mp->expiry_date = date('Y-m-d H:i:s');
    	$mp->banner_url = $Request->banner_url;
    	$mp->created_by = 3;
    	$mp->save();
    	return redirect('/');

    }
}
