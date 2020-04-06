@extends('home')
@section('seccion')
<form action="{{ route('update_room', $rooms->id)}}"  method="POST" class="form-validate-jquery">
    @csrf
    <div class="container register card">
        <h3  class="register-heading">Update Room</h3>
        <div class="row register-form">
            <input type="hidden" id="id" name="id" value="{{$rooms->id}}" disabled>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" id="name" name="name"  class="form-control validate" placeholder="Name *" value="{{$rooms->name}}"  required/>
                </div>
                <div class="form-group">
                    <input id="price" name="price" type="text" class="form-control validate" placeholder="Price *" value="{{$rooms->price}}"  required/>
                </div>
                <div class="form-group">
                    <input id="type" name="type" type="text" class="form-control validate" placeholder="Type *" value="{{$rooms -> type}}"  required/>
                </div>
                <div class="form-group">
                    <input id="state" name="state" type="text" class="form-control" placeholder="State *" value="{{$rooms -> state}}" required />
                </div>


            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input id="numberBeds" name="numberBeds" type="text" class="form-control" placeholder="Number Beds *" value="{{$rooms -> numberBeds}}" required />
                </div>
                <div class="form-group">
                    <input id="numberBathroom" name="numberBathroom"  type="text" class="form-control" placeholder="Number Bathroom *" value="{{$rooms -> numberBathroom}}"  required/>
                </div>
                <div class="form-group">
                    <input id="numberTV" name="numberTV" type="text"  class="form-control" placeholder="Number TV *" value="{{$rooms -> numberTV}}" required />
                </div>
                <div class="form-group">
                    <input id="cradle" name="cradle" type="text" class="form-control" placeholder="Cradle *" value="{{$rooms -> cradle}}" required />
                </div>
                <button type="submit" class="btnRegister" >Actualizar</button>
            </div>
        </div>
 </div>
       </form>
@endsection