@extends('home')
@section('seccion')
<form method="POST" action="{{ route('create_room') }}" >
    @csrf
<div class="container register card">
                    <h3  class="register-heading">Register Room</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="number"  id="number" class="form-control validate" value="" placeholder="Number *">
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" name="name"  class="form-control validate" placeholder="Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="price" name="price" type="text" class="form-control validate" placeholder="Price *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="type" name="type" type="text" class="form-control validate" placeholder="Type *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="state" name="state" type="text" class="form-control" placeholder="State *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="numberBeds" name="numberBeds" type="text"  class="form-control" placeholder="Number Beds *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="numberBathroom" name="numberBathroom"  type="text" class="form-control" placeholder="Number Bathroom *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="numberTV" name="numberTV" type="text"  class="form-control" placeholder="Number TV *" value="" />
                            </div>
                            <div class="form-group">
                                <input id="cradle" name="cradle" type="text" class="form-control" placeholder="Cradle *" value="" />
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