<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:cliente');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ViewCliente.home');
    }
}
