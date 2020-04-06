<?php

namespace App\Http\Controllers;

use App\Role;
use App\role_user;
use App\User;
use Illuminate\Http\Request;
use DataTables;
class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = role_user::all();
            return DataTables::of($data)
                ->addColumn('user_id', function ($row) {
                     $user = User::findOrFail($row->user_id);
                     $btn =$user->name;
                     $btn = $btn. " $user->lastname";
                     return $btn;
                })
                ->addColumn('role_id', function ($row) {
                    $user = Role::findOrFail($row->role_id);
                    $btn =$user->name;
                    return $btn;
               })
                ->rawColumns(['user_id','role_id'])
                ->make(true);
        }
        return view('user.user');
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
        role_user::updateOrCreate(['id' => $request->id],
        ['role_id' => $request->rol, 'user_id' => $request->idUser]);        
        return response()->json(['success'=>'Asignado saved successfully.']);
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
