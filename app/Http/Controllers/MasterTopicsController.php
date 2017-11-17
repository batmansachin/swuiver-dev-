<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MasterTopicsController extends Controller
{
    public function submitquery_topics(Request $Request){

		$mp = new App\MasterTopic();
        $mp->name = $Request->name;
        $mp->image_url = $Request->image_url;
        $mp->added_by = 5;
        $mp->updated_by = 2;
        $mp->save();
        return redirect('/');
    }
}
