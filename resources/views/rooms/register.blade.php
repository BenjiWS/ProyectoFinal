@extends('home')
@section('seccion')
<form method="POST" action="{{ route('create_room') }}" class="form-validate-jquery" >
    @csrf
<div class="container register card">
                    <h3  class="register-heading">Register Room</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name"  class="form-control validate" placeholder="Name *" value="" required />
                            </div>
                            <div class="form-group">
                                <input id="price" name="price" type="text" class="form-control validate number" placeholder="Price *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input id="type" name="type" type="text" class="form-control validate" placeholder="Type *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input id="state" name="state" type="text" class="form-control" placeholder="State *" value="" required/>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="numberBeds" name="numberBeds" type="text"  class="form-control" placeholder="Number Beds *" value="" required />
                            </div>
                            <div class="form-group">
                                <input id="numberBathroom" name="numberBathroom"  type="text" class="form-control" placeholder="Number Bathroom *" value="" required />
                            </div>
                            <div class="form-group">
                                <input id="numberTV" name="numberTV" type="text"  class="form-control" placeholder="Number TV *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input id="cradle" name="cradle" type="text" class="form-control" placeholder="Cradle *" value="" required/>
                            </div>
                            <button type="submit" class="btnRegister">Register</button>
                        </div>
                    </div>
             </div>
       </form>

@endsection