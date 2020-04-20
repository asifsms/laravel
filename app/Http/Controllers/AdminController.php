<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        // $this->middleware('guest:admin')->except('logout');
    }
    public function admin()
    {
        return view('dashboard');
    }
}
