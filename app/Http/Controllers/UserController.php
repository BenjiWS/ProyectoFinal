<?php

namespace App\Http\Controllers;

use App\role_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use DataTables;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        if ($request->ajax()) {
            $data = User::all();
            return DataTables::of($data)
            ->addColumn('state', function ($row) {
                if ($row->state == true) {
                    $btn = '<span class="badge badge-success">Activado</span>';
                } else {
                    $btn = '<span class="badge badge-danger">Desactivado</span>';
                }
                return $btn;
            })
                ->addColumn('actions', function ($row) {
                    $btn = '<a href="'.route('view_actualizar',["id"=>$row->id]).'"   data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editRoom">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm stateUser">Change</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Rol" class="btn btn-success btn-sm assignRol">Asign Rol</a>';
                    return $btn;
                })
                ->rawColumns(['state','actions'])
                ->make(true);
        }
        $roles = DB::table('roles')->select('id', 'name')->get();
        return view('user.user',compact('roles'));
    }
    public function Roles(Request $request)
    {
        $roles = DB::table('roles')->select('id', 'name')->get();
        return view('user.register',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newUser = new User();
        $newRol = new role_user();
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
        $idUser= User::all();
        $ultimo =$idUser->last();
        $newRol->role_id =$request->rol;
        $newRol->user_id=$ultimo->id;
        $newRol->save();
        $roles = DB::table('roles')->select('id', 'name')->get();
        return view('user.user',compact('roles'));
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
        $newUser->save();
        $roles = DB::table('roles')->select('id', 'name')->get();
        return view('user.user',compact('roles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->state == false)
        {
            $user->state= true ;
            $user->save();
        }
        else
        {
            $user->state= false ;
            $user->save();
        }
        return response()->json(['success'=>'User deleted successfully.']);
    }
}
