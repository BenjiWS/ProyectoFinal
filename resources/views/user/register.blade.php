@extends('home')
@section('seccion')
<div class="col-lg-7">
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Register User</h3>
            </div>
            <hr>
            <form action="" method="post" novalidate="novalidate">
                <div class="form-group">
                    <div class="col-7" style="padding-left:0px !important">
                        <div class="input-group">
                            <input type="text" id="ci" name="ci" placeholder="Ci" class="form-control" autocomplete="off">
                           <div class="input-group-addon">
                               <i class="far fa-address-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:16px !important">
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" id="name" name="name" placeholder="Name" class="form-control" autocomplete="off">
                               <div class="input-group-addon">
                                <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" id="lastname" name="lastname" placeholder="Lastname" class="form-control" autocomplete="off">
                               <div class="input-group-addon">
                                <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-7" style="padding-left:0px !important">
                        <div class="input-group">
                            <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" autocomplete="off">
                           <div class="input-group-addon">
                               <i class="fas fa-mobile-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" autocomplete="off">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text' id="address" name="address" placeholder="Address" class="form-control" autocomplete="off">
                        <div class="input-group-addon">
                            <i class="fas fa-location-arrow"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control"autocomplete="off" >
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Register</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection