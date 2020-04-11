<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{

    public function showLoginForm()
    {
        return view('blog.login');
    }



    public function index()
   {
       return view('test');
   }
//    public function showRegisterForm()
//     {
//         return view('blog.register');
//     }
//     public function register(Request $request)
//     {
//         $this->validation($request);
//         bloger::create($request->all());
//         return redirect('/')->with('Status','You are registerd');
//         // return $request->all();
//     }
//     public function validation($request)
//     {
//         return $this->validate($request, [
//             'fname' => 'required|max:255',
//             'lname' => 'required|max:255',
//             'email' => 'required|email|max:255',
//             'password' => 'required|confirmed|max:255',
//         ]);
    
    // }
}
