<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Reservation;
use App\Room;
use Illuminate\Support\Facades\Hash;
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
                ->addColumn('idCliente', function ($row) {
                     $cliente = Cliente::findOrFail($row->idCliente);
                     $btn =$cliente->name;
                     $btn = $btn. " $cliente->lastname";
                     return $btn;
                })
                ->addColumn('idRoom', function ($row) {
                    $room = Room::findOrFail($row->idRoom);
                    $btn =$room->name;
                    return $btn;
               })
                ->addColumn('stateUsername', function ($row) {
                    if ($row->stateUsername == true) {
                        $btn = '<span class="badge badge-success">Activo</span>';
                    } else {
                        $btn = '<span class="badge badge-danger">No Activo</span>';
                    }
                    return $btn;
                })
                ->addColumn('state',function($row){
                    if($row->state =="Terminado")
                    {
                      $btn = '<span class="badge badge-success">'.$row->state.'</span>';
                    }
                    if($row->state =="Cancelado")
                    {
                        $btn = '<span class="badge badge-danger">'.$row->state.'</span>';
                    }
                    $btn = '<span class="badge bg-blue">'.$row->state.'</span>';
                    return $btn;
                })
                ->addColumn('actions', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm stateReserva">Cancel</a>';
                    return $btn;
                })
                ->rawColumns(['idCliente','idRoom','stateUsername','state', 'actions'])
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
        $newReserva->idCliente= $request->ci1;
        $cliente = DB::table('clientes')->where('id', '=',$request->ci1)->first();
        $newReserva->idRoom=$request->room1;
        $startdate = date("y-m-d", strtotime($request->startDate1));
        $newReserva->startDate= $startdate;
        $enddate = date("y-m-d", strtotime($request->endDate1));
        $newReserva->endDate= $enddate;
        $newReserva->type=$request->type1;
        $newReserva->state=$request->state1;
        $newReserva->penalty=0;
        $newReserva->username = $cliente->username;
        $newReserva->password = Hash::make($cliente->password);
        $newReserva->stateUsername=true;
        $newReserva->save();
        $room = Room::find($request->room1);
        $room->state="Ocupado";
        $room->save();
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
        $rooms = DB::table('rooms')->select('id', 'name')->get();
        $reservas= Reservation::findOrFail($id);
        return view('reservas.actualizar',compact("reservas",'rooms'));
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
        $reservas = Reservation::findOrFail($id);
        if($reservas->state == "En proceso")
        {
            $reservas->state= "Cancelada";
            $reservas->penalty=200;
            $reservas->save();
        }
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
