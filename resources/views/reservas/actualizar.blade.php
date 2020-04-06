@extends('home')
@section('seccion')
<div class="card-body">
    <form name="registerForm" id="registerForm" class="form-validate-jquery">
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <input type="hidden" name="id" id="id">
                    <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i>PERSONAL DETAILS</legend>
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
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your name:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" placeholder="First name"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="lastname" name="lastname" placeholder="Last name"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" id="email" name="email" placeholder="eugene@kopyov.com"
                                class="form-control " required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Phone #:</label>
                        <div class="col-lg-9">
                            <input type="text" id="phone" name="phone" placeholder="+99-99-9999-9999"
                                class="form-control number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Address:</label>
                        <div class="col-lg-9">
                            <input id="address" name="address" type="text" placeholder="Your address of living"
                                class="form-control" required>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <input type="hidden">
                    <legend class="font-weight-semibold">
                        <i class="icon-file-text2 mr-2"></i>
                        Credit Card Information
                    </legend>
                    
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Enter your username:</label>
                        <div class="col-lg-9">
                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="Eugene Kopyov" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Enter your password:</label>
                        <div class="col-lg-9">
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Your strong password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Repeat password</label>
                        <div class="col-lg-9">
                            <input type="password" name="repeat_password" class="form-control" required placeholder="Try different password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your Number Credit Card:</label>
                        <div class="col-lg-9">
                            <input type="text" id="number_Credit_Card" name="number_Credit_Card"
                                placeholder="Number Credit Card" class="form-control number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your Number CVV and Date:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="number_CVV" name="number_CVV" placeholder="Number CVV"
                                        class="form-control number" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="date_Card" name="date_Card" placeholder="Date Card"
                                        class="form-control  date-picker-P" required  autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>  
          <div class="row">
            <div class="col-md-6">
                <fieldset>
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