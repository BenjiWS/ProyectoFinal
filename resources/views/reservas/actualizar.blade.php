@extends('home')
@section('seccion')
<div class="card-body" style="background-color: white;">
    <form name="registerForm" id="registerForm" class="form-validate-jquery"> 
          <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your Ci:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="ci" name="ci" placeholder="Ci" class="form-control number" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="idReserva" id="idReserva">
                    <legend class="font-weight-semibold">  <i class="icon-file-text2 mr-2"></i>RESERVA DETAILS</legend>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your Room Id:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control select" name="room" id="room" roldata-fouc>
                                         @foreach ($rooms as $room)
                                        <option value="{{$room-> id}}">{{$room-> name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your date:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text"  id="startDate" name="startDate" placeholder="Start Date"
                                      class="form-control datepicker"  required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="endDate" name="endDate" placeholder="End Date"
                                    class="form-control datepicker"  required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your info:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control select" name="type" id="type" roldata-fouc required>
                                       <option value="Presencial">Presencial</option>
                                       <option value="Telefonica">Telefonica</option>
                                     </select>
                                </div>

                                <div class="col-md-6">
                                    <select class="form-control select" name="state" id="state"  required roldata-fouc>
                                        <option value="En Proceso">En Proceso..</option>
                                        <option value="Terminado">Terminado</option>
                                        <option value="Cancelado">Cancelado</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Penalty:</label>
                        <div class="col-md-6">
                            <input id="penalty" name="penalty" type="text" placeholder="Penalty"
                                class="form-control" required>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="text-right">
            <button  type="submit" class="btn btn-primary ml-3" id="saveBtn">Submit form <i
                    class="icon-paperplane ml-2"></i></button>
        </div>
    </form>
</div>
@endsection