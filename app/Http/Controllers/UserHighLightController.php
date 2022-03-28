<?php


namespace App\Http\Controllers;
use App\Models\Highlight;
use Illuminate\Http\Request;

class UserHighLightController extends Controller
{
    
    public function index()
    {
        $highlight_data= Highlight::all();
        return view('user.highlight', compact('highlight_data'));
    }
/**
     * Display the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $highlight = Highlight::find($id);
        $hightlight_comment = $highlight->comments;
        return view('user.highlightdetail',compact('hightlight_comment','highlight'));
    }

}
