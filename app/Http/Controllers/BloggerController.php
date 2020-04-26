<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogger;
use App\Blogg;
use Auth;

class BloggerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:blogger');
        // $this->middleware('guest:admin')->except('logout');
    }
    public function blogger()
    {
        $arr = auth()->user();
        $blogg['bloggs'] = Blogg::all();
        // $arr = 'aaaaaa';
        return view('blog.bloggs')->withAaa($arr)->with($blogg);
    }
}




// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Blogger;

// class BloggerController extends Controller
// {
//     public function __construct()
//     {
//         $this->middleware('auth:blogger');
//         // $this->middleware('guest:admin')->except('logout');
//     }
//     public function blogger()
//     {
//         $arr['bloggers'] = Blogger::all();
//         return view('blog.bloggs')->with($arr);
//         // return view('blog.bloggs');
//     }
// }
