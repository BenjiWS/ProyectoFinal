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
            $data = Room::all();
            return DataTables::of($data)
                ->addColumn('cradle', function ($row) {
                    if ($row->cradle == true) {
                        $btn = '<span class="badge badge-success">Disponible</span>';
                    } else {
                        $btn = '<span class="badge badge-danger">No Disponible</span>';
                    }
                    return $btn;
                })
                ->addColumn('state',function($row){
                    $btn = '<span class="badge badge-success">'.$row->state.'</span>';
                    return $btn;
                })
                ->addColumn('actions', function ($row) {
                    $btn = '<a href="'.route('view_update_room',["id"=>$row->id]).'"   data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editRoom">Edit</a>';
   
                     return $btn;
                })
                ->rawColumns(['cradle','state', 'actions'])
                ->make(true);
        }
        return view('rooms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newRoom = new Room();
        $newRoom->number = $request->number;
        $newRoom->name = $request->name;
        $newRoom->price = $request->price;
        $newRoom->type = $request->type;
        $newRoom->numberBeds = $request->numberBeds;
        $newRoom->numberBathroom = $request->numberBathroom;
        $newRoom->numberTV = $request->numberTV;
        $newRoom->state= $request->state;
        $newRoom->cradle = true;
        $newRoom->save();
        return view('rooms.index');
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
        $rooms = Room::findOrFail($id);
        return view('rooms.actualizar',compact("rooms"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $newRoom = Room::find($id);
        $newRoom->number = $request->number;
        $newRoom->name = $request->name;
        $newRoom->price = $request->price;
        $newRoom->type = $request->type;
        $newRoom->numberBeds = $request->numberBeds;
        $newRoom->numberBathroom = $request->numberBathroom;
        $newRoom->numberTV = $request->numberTV;
        $newRoom->state= $request->state;
        $newRoom->cradle = true;
        $newRoom->save();
        return view('rooms.index');
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
