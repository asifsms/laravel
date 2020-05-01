<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Blogger;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        // $this->middleware('guest:admin')->except('logout');
    }
    public function edit()
    {
        $arr['profiles'] = Blogger::all();
        return view('admin.users.edit')->with($arr);
    }
}
