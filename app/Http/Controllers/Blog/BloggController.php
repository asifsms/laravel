<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogger;
use Auth;
use App\Blogg;
class BloggController extends Controller
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
        
        // return view('blog.bloggs')->with($arr);
        $arr = auth()->user();
        $bid= $arr->id;
        $blogg['bloggs'] = Blogg::where('uid', $bid)->orderBy('created_at', 'desc')->get();
        
        // $blogg['bloggs'] = Blogg::all();
        
        return view('blog.user-blogg')->with($blogg)->withAaa($arr);
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
    public function store(Request $request, Blogg $blogg)
    {
        if($request->photos->getClientOriginalName()){
            $ext = $request->photos->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->photos->storeAs('public/bloggs',$file);
        }
        else{
            $file = '';
        }
        $arr = auth()->user();
        $blogg->uid = $arr->id;
        $blogg->title = $request->title;
        $blogg->about = $request->about;
        $blogg->poster = $file;
        $blogg->save();
        // return redirect()->route('admin.notification.index');
        return redirect('blogger');
    }

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
