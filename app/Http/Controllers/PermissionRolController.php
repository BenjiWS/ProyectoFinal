<?php

namespace App\Http\Controllers;

use App\Permission;
use App\permission_role;
use App\Role;
use Illuminate\Http\Request;
use DataTables;
class PermissionRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = permission_role::all();
            return DataTables::of($data)
                ->addColumn('permission_id', function ($row) {
                    $permission = Permission::findOrFail($row->permission_id);
                     $btn = $permission->name;
                     return $btn;
                })
                ->addColumn('role_id', function ($row) {
                    $role = Role::findOrFail($row->role_id);
                     $btn = $role->name;
                     return $btn;
                })
                ->rawColumns(['permission_id','role_id'])
                ->make(true);
        }
        return view('role.roles',compact('roles'));
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
        permission_role::updateOrCreate(['id' => $request->idPR],
        ['permission_id' => $request->permiso, 'role_id' => $request->rol]);        
        return response()->json(['success'=>'RolPermiso saved successfully.']);
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
