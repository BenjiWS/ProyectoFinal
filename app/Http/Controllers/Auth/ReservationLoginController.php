<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class ReservationLoginController extends Controller
{
    
    public function __construct()
    {
      $this->middleware('guest:reservation', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
      return view('ViewClienteSistema.login');
    }
    
    public function login(Request $request)
    {
      // Validate the form data
      $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
      
      // Attempt to log the user in
      if (Auth::guard('reservation')->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('reservation.dashboard'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('username', 'remember'));
    }
    
    public function logout()
    {
        Auth::guard('reservation')->logout();
        return redirect('/reservation');
    }
}
