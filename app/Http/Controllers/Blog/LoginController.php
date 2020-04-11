<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Bloger;
use Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bloger $bloger)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
        // $arr['blogers'] = Bloger::all();
        // return $blogers;
        if (Auth::guard('bloger')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return view('blog.index');
        }
        return 'oooooops';
        // return back()->withInput($request->only('email', 'remember'));
    }

        // if (Auth::attempt(['email' => $request -> $email, 'password' => $request -> $password]))
        // if ( $bloger -> email == $request -> email && $bloger -> password == $request -> password)
        // {
        //     return view('blog.index');
        // }
        // return 'oooooops';
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
