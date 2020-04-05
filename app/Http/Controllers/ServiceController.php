<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::all();
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
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editService">Edit</a>';
   
                    $btn = $btn.' <a href="javascript:void(0)" data-id="'.$row->id.'"  class="btn btn-danger btn-sm stateChange">Change</a>';

                     return $btn;
                })
                ->rawColumns(['state', 'action'])
                ->make(true);
        }
        return view('servicios.index');
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
        if($request -> ajax())
        {
        Service::updateOrCreate(['id' => $request->idService],
        ['name' => $request->name, 'type' => $request->type,
        'price' => $request->price,'description' => $request->description,
        'state' => true]);        
        return response()->json(['success'=>'Product saved successfully.']);
        }
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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return response()->json($service);
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
        $service = Service::find($id);
        if($service->state == false)
        {
            $service->state= true ;
            $service->save();
        }
        else
        {
            $service->state= false ;
            $service->save();
        }
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
