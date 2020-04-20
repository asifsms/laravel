<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth; 

class AdminController extends Controller
{


    public function __construct()
    {
        // $this->middleware('auth'); 
        // $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin', ['except'=>['logout']]); 
    }
    public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
    // public function admin()
    // {
    //     return view('admin');
    // }
}
