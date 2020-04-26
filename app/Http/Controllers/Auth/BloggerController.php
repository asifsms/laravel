<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class BloggerController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('guest:blogger', ['except'=>['bloggerLogout']]);
    }
    public function showBloggerLoginForm()
    {
        return view('auth.login', ['url' => 'blogger']);
    }
    public function bloggerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('blogger')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            // $blogger = Blogger::where('email', $request->email)->first();
            // return view('pages/edit-profile', compact('user));
            // $arr = $request->email;
            // $user = Auth::blogger()->id;
            return redirect()->intended('/blogger');
            // return view('blog.bloggs')->with("aa", $arr);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function bloggerLogout()
    {
        Auth::guard('blogger')->logout();
        return redirect('/');
        // if ($response = $this->loggedOut($request)) {
        //     return $response;
        // }

        // return $request->wantsJson()
        //     ? new Response('', 204)
        //     : redirect('/');
    
    }
}