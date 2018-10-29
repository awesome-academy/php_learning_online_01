<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function show($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        return view('auth.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        return view('auth.edit', compact('user'));
    }

    public function update($id,UserRequest $request)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        $user-> name = $request['name'];
        $user-> email = $request['email'];
        $user-> num_phone = $request['num_phone'];
        $user-> address = $request['address'];
        $user-> course_fee = $request['course_fee'];
        //$user-> password =  Hash::make($request['password']);
        $user-> password = bcrypt($request['password']);
        $user->save();
        return view('auth.show', compact('user'));
    }

}
