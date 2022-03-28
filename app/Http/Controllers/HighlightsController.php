<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highlight_data= Highlight::all();
        return view('highlights.index', compact('highlight_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('highlights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Highlight();
        $data->title=$request->title;
        $data->description=$request->description;
        $data->video_url=$request->video_url;
        $data->save();
        return redirect()->route('highlight.index')->with('message','Video has been added successfully');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function show(Highlight $highlight)
    {
        //
        return view('highlights.details',compact('highlight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlight $highlight)
    {
        //
        return view('highlights.edit',compact('highlight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Highlight $highlight)
    {
        //
        $highlight->title = $request->title;
        $highlight->description = $request->description;
        $highlight->video_url = $request->video_url;
        $highlight->update();
        return redirect()->route('highlight.index')->with('message','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlight $highlight)
    {
        $highlight->delete();
        return redirect()->route('highlight.index')->with('message','Delete successfully');
    }
}
