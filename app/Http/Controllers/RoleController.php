<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Role;
use DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::all();
            return DataTables::of($data)
                ->addColumn('state', function ($row) {
                    if ($row->state == true) {
                        $btn = '<span class="badge badge-success">Activado</span>';
                    } else {
                        $btn = '<span class="badge badge-danger">Desactivado</span>';
                    }
                    return $btn;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editRol">Edit</a>';
   
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm stateRol">Change</a>';

                     return $btn;
                })
                ->rawColumns(['state', 'action'])
                ->make(true);
        }
        $roles = DB::table('roles')->select('id', 'name')->get();
        $permisos = DB::table('permissions')->select('id', 'name')->get();
        return view('role.roles',compact('roles','permisos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $respuesta =0;
        if($request->state == "Activado")
        {
            $respuesta=true;
        }
        if($request->state == "Desactivado")
        {
            $respuesta=false;
        }
        Role::updateOrCreate(['id' => $request->idRole],
        ['name' => $request->name, 'state' => $respuesta]);        
        return response()->json(['success'=>'Product saved successfully.']);
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
        $rol = Role::find($id);
        return response()->json($rol);
    }
    public function stateChange($id)
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
        $rol = Role::find($id);
        if($rol->state == false)
        {
            $rol->state= true ;
            $rol->save();
        }
        else
        {
            $rol->state= false ;
            $rol->save();
        }
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
