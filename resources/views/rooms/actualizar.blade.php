@extends('home')
@section('seccion')
<link href="{{asset("assets/cool/css/style_user.css")}}" rel="stylesheet" media="all">
<form action="{{ route('actualizar', $users-> id)}}"  method="POST">
    @csrf
<div class="container register card">
                    <h3  class="register-heading">Actualizar User</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="ci"  id="ci" class="form-control validate"  placeholder="Id*" value="{{$users->ci}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" name="name"  class="form-control validate" placeholder="First Name *" value="{{$users->name}}" />
                            </div>
                            <div class="form-group">
                                <input id="lastname" name="lastname" type="text" class="form-control validate" placeholder="Last Name *" value="{{$users->lastname}}" />
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="text" class="form-control validate" placeholder="Email *" value="{{$users->email}}" />
                            </div>
            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="phone" name="phone" type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="{{$users->phone}}" />
                            </div>
                            <div class="form-group">
                                <input id="address" name="address"  type="text" class="form-control" placeholder="Address *" value="{{$users->address}}" />
                            </div>
                            <div class="form-group">
                                <input id="username" name="username" type="text" maxlength="10" minlength="10" class="form-control" placeholder="User *" value="{{$users->username}}" />
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password *" value="{{$users->password}}" />
                            </div>
                            <button type="submit" class="btnRegister" onclick="">Actualizar</button>
                        </div>
                    </div>
             </div>
       </form>
@endsection