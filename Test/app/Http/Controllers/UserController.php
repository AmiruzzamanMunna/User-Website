<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return view('User.index');
    }
    public function layouts(Request $request)
    {
    	return view('layouts.User-Home');
    }
}
