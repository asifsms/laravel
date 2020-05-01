<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Blogg;

class SingleBloggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:blogger');
        // $this->middleware('guest:admin')->except('logout');
    }
    public function index()
    {
        // $arr = auth()->user();
        // return view('blog.single-blogg')->withAaa($arr);
        // // return 'aaa';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blogg)
    {
        $bloggs = Blogg::where('id', $blogg)->first();
        $arr = auth()->user();
        // $bloggs = $blogg;
        // // $blogg['blogg'] = $blogg;
        
        return view('blog.single-blogg', ['blogg'=> $bloggs, 'aaa'=>$arr]);
        // return view('blog.single-blogg')->withAaa($arr)->with($blogg);
        // return $blogg->id;
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
