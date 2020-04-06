<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Reservation;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Reservation::all();
            return DataTables::of($data)
                ->addColumn('stateUser', function ($row) {
                    if ($row->stateUsername == true) {
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
                ->rawColumns(['stateUser','state', 'actions'])
                ->make(true);
        }
        return view('reservas.index');
    }
    public function rooms()
    {
        $rooms = DB::table('rooms')->select('id', 'name')->get();
        $clientes = DB::table('clientes')->select('id', 'ci')->get();
        return view('reservas.register',compact('rooms','clientes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newCliente = new Reservation();
        $newCliente->idRoom = $request->idRoom;
        $newCliente->idCliente = $request->idCliente;
        $newCliente->startDate = $request->startDate;
        $newCliente->endDate = $request->endDate;
        $newCliente->type = $request->type;
        $newCliente->state = $request->state;
        $newCliente->penalty = $request->penalty;
        $newCliente->username = $request->username;
        $newCliente->password = Hash::make($request->password);
        $newCliente->stateUsername = $request->stateUsername;
        $newCliente->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newReserva = new Reservation();
        $newReserva->idCliente= 1;
        $newReserva->idRoom=$request->room1;
        $startdate = date("y-m-d", strtotime($request->startDate1));
        $newReserva->startDate= $startdate;
        $enddate = date("y-m-d", strtotime($request->endDate1));
        $newReserva->endDate= $enddate;
        $newReserva->type=$request->type1;
        $newReserva->state=$request->state1;
        $newReserva->penalty=$request->penalty1;
        $newReserva->username = 12345;
        $newReserva->password = 1234;
        $newReserva->stateUsername=true;
        $newReserva->save();
        return response()->json(['success'=>'Reserva saved successfully.']);
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
