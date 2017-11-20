<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;

class DebatesController extends Controller
{
    //
    public function debate_list(){
         $records = DB::table('debates')->get();
    	return view('debate_list')->with('records',$records);
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
    	$mp->slug = str_slug($mp->title,'-');
    	$mp->topic_id = 3;
    	$mp->expiry_date = date('Y-m-d H:i:s');
    	$mp->banner_url = $Request->banner_url;
    	$mp->created_by = 3;
    	$mp->save();
    	return redirect('/');

    }
    public function submitQuery_debate_argument(Request $Request){
        $mp = new App\DebateArgument();
        $mp->created_by = 3;
        $mp->debate_by=10;
        $mp->debate_action_id = $Request->debate_action_id;
        $mp->save();
        return redirect('/');
    }
}
