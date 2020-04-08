<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notificattion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $arr['notifications'] = Notificattion::all();
    //     return view('hikester')->with($arr); 
    //     // return view('hikester');
    // }
    public function admin()
    {
        return view('dashboard');
    }
    public function table()
    {
        return view('table_list');
    }
    public function login()
    {
        return view('login');
    }
}
