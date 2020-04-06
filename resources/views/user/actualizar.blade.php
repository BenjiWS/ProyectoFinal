@extends('home')
@section('seccion')
<form action="{{ route('actualizar', $users-> id)}}"  method="POST" class="form-validate-jquery">
    @csrf
<div class="container register card">
                    <h3  class="register-heading">Actualizar User</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="ci"  id="ci" class="form-control validate"  placeholder="Id*" value="{{$users->ci}}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" name="name"  class="form-control validate" placeholder="First Name *" value="{{$users->name}}" required/>
                            </div>
                            <div class="form-group">
                                <input id="lastname" name="lastname" type="text" class="form-control validate" placeholder="Last Name *" value="{{$users->lastname}}" required/>
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="text" class="form-control validate" placeholder="Email *" value="{{$users->email}}" required/>
                            </div>
            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="phone" name="phone" type="text" maxlength="10" minlength="10" class="form-control number" placeholder="Phone *" value="{{$users->phone}}" required />
                            </div>
                            <div class="form-group">
                                <input id="address" name="address"  type="text" class="form-control" placeholder="Address *" value="{{$users->address}}" required />
                            </div>
                            <div class="form-group">
                                <input id="username" name="username" type="text" class="form-control" placeholder="User *" value="{{$users->username}}" required />
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password *" value="{{$users->password}}"  required/>
                            </div>
                            <button type="submit" class="btnRegister">Actualizar</button>
                        </div>
                    </div>
             </div>
       </form>
@endsection