<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Room::latest()->get();
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
                    $btn =
                        '<button id="' . $row->id . '" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round"><i class="icon-spinner11 mr-2"></i>Estado</button></a>
                    <a class="btn btn-success rounded-round" href="#">
                    <i class="icon-pencil5 mr-2"></i>Editar</a>';
                    return $btn;
                })
                ->rawColumns(['state', 'actions'])
                ->make(true);
        }
        return view('rooms.room');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
