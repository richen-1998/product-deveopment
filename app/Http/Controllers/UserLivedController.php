<?php

namespace App\Http\Controllers;

use App\Models\Live;

class UserLivedController extends Controller
{
    //
    public function index()
    {
        $live_data= Live::all();
        return view('user.live', compact('live_data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Live  $live
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $live = Live::find($id);
        return view('user.livedetail', compact('live'));
    }
}
