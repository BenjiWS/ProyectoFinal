<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Reservation;
use App\Room;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Cliente::all();
            return DataTables::of($data)
                ->addColumn('actions', function ($row) {
                    $btn = '<a href="'.route('view_update_cliente',["id"=>$row->id]).'"   data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editRoom">Edit</a>';
                     return $btn;
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('reservas.index');
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
        $newCliente = new Cliente();
        $newCliente->ci = $request->ci;
        $newCliente->name = $request->name;
        $newCliente->lastname = $request->lastname;
        $newCliente->email = $request->email;
        $newCliente->phone = $request->phone;
        $newCliente->address = $request->address;
        $newCliente->number_Credit_Card = $request->number_Credit_Card;
        $newCliente->number_CVV = $request->number_CVV;
        $newCliente->date_Card = $request->date_Card;
        $newCliente->username = $request->username;
        $newCliente->password = $request->password;
        $newCliente->save();        
        $newReserva = new Reservation();
        $cliente = DB::table('clientes')->where('ci', '=',$request->ci)->first();
        $newReserva->idCliente= $cliente->id;
        $newReserva->idRoom=$request->room;
        $startdate = date("y-m-d", strtotime($request->startDate));
        $newReserva->startDate= $startdate;
        $enddate = date("y-m-d", strtotime($request->endDate));
        $newReserva->endDate= $enddate;
        $newReserva->type=$request->type;
        $newReserva->state=$request->state;
        $newReserva->penalty=0;
        $newReserva->username = $request->username;
        $newReserva->password = Hash::make($request->password);
        $newReserva->stateUsername=true;
        $newReserva->save();
        $room = Room::find($request->room);
        $room->state="Ocupado";
        $room->save();
        return response()->json(['success'=>'Cliente saved successfully.']);
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
        $clientes = Cliente::findOrFail($id);
        return view('cliente.actualizar',compact("clientes"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    
    }
    public function actualizar(Request $request)
    {
        $newCliente = Cliente::find($request->id);
        $newCliente->ci = $request->ci;
        $newCliente->name = $request->name;
        $newCliente->lastname = $request->lastname;
        $newCliente->email = $request->email;
        $newCliente->phone = $request->phone;
        $newCliente->address = $request->address;
        $newCliente->number_Credit_Card = $request->number_Credit_Card;
        $newCliente->number_CVV = $request->number_CVV;
        $newCliente->date_Card = $request->date_Card;
        $newCliente->username = $request->username;
        $newCliente->password = $request->password;
        $newCliente->save();        
        return response()->json(['success'=>'Cliente saved successfully.']);
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
