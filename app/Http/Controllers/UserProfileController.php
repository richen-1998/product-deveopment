<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        //2 => name, email
        return view('user.show', compact('user'));
    }
   
}
