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
                                <select class="form-control select" id="state" name="type" roldata-fouc required>
                                         <option value="Big">Big</option>
                                         <option value="Medium">Medium</option>
                                         <option value="Small">Small</option>
                                 </select>
                           </div>
                            <div class="form-group">
                                <select class="form-control select" id="state" name="state" roldata-fouc required> 
                                    <option value="Disponible">Disponible</option>
                                        <option value="Ocupado">Ocupado</option>
                                            <option value="En Espera">En Espera</option>
                                 </select>
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
                            <button type="submit" class="btnRegister">Register</button>
                        </div>
                    </div>
             </div>
       </form>

@endsection