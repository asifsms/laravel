<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;   

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit()
    {
        $arr['profiles'] = User::all();
        return view('admin.users.edit')->with($arr);
    }
}
