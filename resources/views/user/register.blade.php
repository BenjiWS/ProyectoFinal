@extends('home')
@section('seccion')
<form method="POST" action="{{ route('create_user') }}" >
    @csrf
<div class="container register card">
                    <h3  class="register-heading">Register User</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="ci"  id="ci" class="form-control validate" value="" placeholder="Ci *">
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" name="name"  class="form-control validate" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="lastname" name="lastname" type="text" class="form-control validate" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control validate" placeholder="Email *" value="" />
                            </div>
                


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="phone" name="phone" type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="address" name="address"  type="text" class="form-control" placeholder="Address *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="username" name="username" type="text" maxlength="10" minlength="10" class="form-control" placeholder="User *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <button type="submit" class="btnRegister" onclick="Evento()">Register</button>
                        </div>
                    </div>
             </div>
             <script>
                  function Evento() {
                    Swal.fire('Good job!','You clicked the button!','success')
                  }
             </script>
       </form>

@endsection