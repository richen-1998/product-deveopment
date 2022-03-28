<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContactUs extends Controller
{
    public function index()
    {
        return view('user.contact');
    }
}
