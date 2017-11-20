<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    //
    public function index(){
    	return view('index');
    }
    
    public function table(){
        $records = DB::table('master_topics')->get();
        //dd($records->all());
    	return view('table')->with('records',$records);
    }
   	public function image_status_list(){
    	return view('image_status_list');
    }
    public function album_form(){
        return view('album_form');
    }
    public function add_topics(){
        return view('add_topics');
    }
    
    public function submitquery(Request $Request){

        $Name = $Request->input('name');
        $Status = $Request->input('status');

        $data  = array('Name' => $Name, 'Status' => $Status);
        DB::table('Field')->insert($data);
        return redirect('/');
    }
}

