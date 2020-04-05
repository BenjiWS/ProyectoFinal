<?php

namespace App\Http\Controllers;

use App\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
                    $btn = '<a href="'.route('view_update_room',["id"=>$row->id]).'"   data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editRoom">Edit</a>';
                     return $btn;
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('cliente.index');
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