<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloggerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:blogger');
        // $this->middleware('guest:admin')->except('logout');
    }
    public function blogger()
    {
        return view('blogger');
    }
}
