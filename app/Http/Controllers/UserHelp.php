<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHelp extends Controller
{
    public function index()
    {
        return view('user.help');
    }
}
