<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterTopics;
use DB;

class MasterTopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {
        $records = DB::table('master_topics')->get();
        //dd($records->all());
        return view('table')->with('records',$records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'type' => 'New',
            'masterTopic' => null
        );
        return view('topics_form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mp = new App\MasterTopics();
        $mp->name = $Request->name;
        $mp->slug = str_slug($mp->name,'-');
        $mp->image_url = $Request->image_url;
        $mp->status = 0;
        $mp->added_by = 5;
        $mp->updated_by = 2;

        $mp->save();
        return redirect()->route('master-topic.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'type' => 'EDIT',
            'masterTopic' => MasterTopics::find($id)
            );
        return view('topics_form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $master = MasterTopics::find($id);
        $master->name = $request->name;
        $master->slug = str_slug($master->name,'-');
        $master->image_url = $request->image_url;
        $master->status = $request->status;
        $master->added_by = $request->added_by;
        $master->updated_by = $request->updated_by;
        $master->save();
        return redirect()->route('master-topic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "DELET".$id;
    }
}
