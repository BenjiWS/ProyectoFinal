@extends('home')
@section('seccion')
<form method="POST" action="{{ route('create_user') }}" class="form-validate-jquery">
    @csrf
<div class="container register card">
                    <h3  class="register-heading">Register User</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="ci"  id="ci" class="form-control validate number" value="" placeholder="Ci *" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" name="name"  class="form-control validate" placeholder="First Name *" value="" required />
                            </div>
                            <div class="form-group">
                                <input id="lastname" name="lastname" type="text" class="form-control validate" placeholder="Last Name *" value=""required />
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control validate" placeholder="Email *" value=""required />
                            </div>
                            <div class="form-group">
                                <label>Assing Rol</label>
                                <select class="form-control select" name="rol" id="rol" roldata-fouc>
                                    @foreach ($roles as $rol)
                                    <option value="{{$rol-> id}}">{{$rol-> name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="phone" name="phone" type="text" maxlength="10" minlength="10" class="form-control number" placeholder="Phone *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input id="address" name="address"  type="text" class="form-control" placeholder="Address *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input id="username" name="username" type="text"  class="form-control" placeholder="User *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" maxlength="8" minlength="8" class="form-control" placeholder="Password *" value="" required/>
                            </div>
                            <button type="submit" class="btnRegister" onclick="Evento()">Register</button>
                        </div>
                    </div>
             </div>
       </form>

@endsection