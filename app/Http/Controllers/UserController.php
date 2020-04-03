<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $users = DB::table('users')->select('id', 'ci', 'name', 'lastname','email','phone','state')->get();
        return view('user.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newUser = new User();
        $newUser->ci = $request->ci;
        $newUser->name = $request->name;
        $newUser->lastname = $request->lastname;
        $newUser->email = $request->email;
        $newUser->phone = $request->phone;
        $newUser->address = $request->address;
        $newUser->username = $request->username;
        $newUser->password = Hash::make($request->password);
        $newUser->state = true;
        $newUser->save();
        $users = DB::table('users')->select('id', 'ci', 'name', 'lastname','email','phone','state')->get();
        return view('user.user',compact('users'));
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
        $users = User::findOrFail($id);
        return view('user.actualizar',compact("users"));
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
        $newUser =  User::find($id);
        $newUser->ci = $request->ci;
        $newUser->name = $request->name;
        $newUser->lastname = $request->lastname;
        $newUser->email = $request->email;
        $newUser->phone = $request->phone;
        $newUser->address = $request->address;
        $newUser->username = $request->username;
        $newUser->password = Hash::make($request->password);
        $newUser->state = true;
        $users = DB::table('users')->select('id', 'ci', 'name', 'lastname','email','phone','state')->get();
        return view('user.user',compact('users'));
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
