<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notificattion;


class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['notification'] = Notificattion::all();
        return view('admin.notification.index')->with($arr); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notification.notification');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Notificattion $notification)
    {
        // echo $request->poster->getClientOriginalName();
        if($request->poster->getClientOriginalName()){
            $ext = $request->poster->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->poster->storeAs('public/notification',$file);
        }
        else{
            $file = '';
        }
        $notification->title = $request->title;
        $notification->about = $request->about;
        $notification->poster = $file;
        $notification->save();
        // return redirect()->route('admin.notification.index');
        return redirect('admin/notification');
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
    public function edit(Notificattion $notification)
    {
        // echo $notification->id;
        $arr['notification'] = $notification;
        return view('admin.notification.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificattion $notification)
    {
        if($request->poster->getClientOriginalName()){
            $ext = $request->poster->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
            $request->poster->storeAs('public/notification',$file);
        }
        else{
            $file = '';
        }
        $notification->title = $request->title;
        $notification->about = $request->about;
        $notification->poster = $file;
        $notification->save();
        // return redirect()->route('admin.notification.index');
        return redirect('admin/notification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notificattion::destroy($id);
        return redirect('admin/notification');
    }
}
