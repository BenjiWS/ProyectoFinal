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
                    <select class="form-control select" id="state" name="type" roldata-fouc required>
                        <option value="{{$rooms->type}}">{{$rooms->type}}</option>
                        <option value="Big">Big</option>
                        <option value="Medium">Medium</option>
                        <option value="Small">Small</option>
                     </select>
               </div>
                <div class="form-group">
                    <label>State</label>
                    <select class="form-control select" id="state" name="state" roldata-fouc required>
                        <option value="{{$rooms -> state}}">{{$rooms -> state}}</option>
                        <option value="Disponible">Disponible</option>
                        <option value="En Espera">En Espera</option>
                        <option value="Ocupado">Ocupado</option>
                      </select>
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
                    <label class="d-block font-weight-semibold">Cradle</label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input-styled" name="cradle"   value="Activado"  data-fouc>
                             Activado
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input-styled" name="cradle" value="Desactivado" data-fouc>
                             Desactivado
                        </label>
                    </div>
                </div>
                <button type="submit" class="btnRegister" >Actualizar</button>
            </div>
        </div>
 </div>
       </form>
@endsection