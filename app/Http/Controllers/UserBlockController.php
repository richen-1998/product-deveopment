<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->where('role', 0)->get();

        return view('blockuser.index',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserBlock  $userBlock
     * @return \Illuminate\Http\Response
     */
    public function show(UserBlock $userBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBlock  $userBlock
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBlock $userBlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserBlock  $userBlock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserBlock $userBlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBlock  $userBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       User::find($id)->delete();
        return redirect()->route('blockuser.index')->with('message','Delete successfully');
    }
}
