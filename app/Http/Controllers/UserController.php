<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       
        $archive_data= Archive::all();
        return view('user.welcome', compact('archive_data'));
    }

   
   public function show($id)
   {
       $archive = Archive::find($id);
       return view('user.userdetail',compact('archive'));
   }
}
