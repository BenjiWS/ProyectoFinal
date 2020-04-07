<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class ClienteLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:cliente', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
      return view('ViewCliente.login');
    }
    
    public function login(Request $request)
    {
       $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
      
      // Attempt to log the user in
      if (Auth::guard('cliente')->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('cliente.dashboard'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    public function logout()
    {
        Auth::guard('cliente')->logout();
        return redirect('/cliente');
    }
}
