<?php

namespace App\Http\Controllers;

use App\Service;
use App\service_cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;
use DateTime;
use SebastianBergmann\Environment\Console;

class ServiceClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = DB::table('service_cliente')->get();
        return view('ViewClienteSistema.Servicios.index',compact('roles'));
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
        $now = new DateTime();
        $newServiceCLiente =new service_cliente();
        $newServiceCLiente->idService = $request->idService;
        $newServiceCLiente->idCliente = $request->idCliente;
        $newServiceCLiente->Date = $now;
        $newServiceCLiente->save();
        return response()->json(['success'=>'Confirmacion regiter successfully.']);
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
        echo($id);
    }
}
