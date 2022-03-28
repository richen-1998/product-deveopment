<?php

namespace App\Http\Controllers;

use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $live_data= Live::all();
        return view('live.index', compact('live_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('live.create');
    }

    /**
     * Store a newly czreated resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Live();
        $data->title=$request->title;
        $data->description=$request->description;
        $data->video_url=$request->video_url;
        $data->save();
        return redirect()->route('live.index')->with('message','Video has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function show(Live $live)
    {
        return view('live.details',compact('live'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function edit(Live $live)
    {
        return view('live.edit',compact('live'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Live $live)
    {
        $live->title = $request->title;
        $live->description = $request->description;
        $live->video_url = $request->video_url;
        $live->update();
        return redirect()->route('live.index')->with('message','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function destroy(Live $live)
    {
        $live->delete();
        return redirect()->route('live.index')->with('message','Delete successfully');
    }
}
