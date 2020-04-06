@extends('home')
@section('seccion')
<!-- 2 columns form -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title"  style="font-size: 20px;">Actualizar Cliente</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form name="registerForm" id="registerForm" class="form-validate-jquery">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input type="hidden" name="id" id="id" value="{{$clientes->id}}">
                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i>PERSONAL DETAILS</legend>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Your Ci:</label>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="ci" name="ci" placeholder="Ci" value="{{$clientes->ci}}"class="form-control number" required>
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
                                            class="form-control" required value="{{$clientes->name}}">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" id="lastname" name="lastname" placeholder="Last name"
                                            class="form-control" required value="{{$clientes->lastname}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Email:</label>
                            <div class="col-lg-9">
                                <input type="email" id="email" name="email" placeholder="eugene@kopyov.com"
                                    class="form-control " required value="{{$clientes->email}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Phone #:</label>
                            <div class="col-lg-9">
                                <input type="text" id="phone" name="phone" placeholder="+99-99-9999-9999"
                                    class="form-control number" required value="{{$clientes->phone}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Address:</label>
                            <div class="col-lg-9">
                                <input id="address" name="address" type="text" placeholder="Your address of living"
                                    class="form-control" required value="{{$clientes->address}}">
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
                                    placeholder="Eugene Kopyov" required value="{{$clientes->username}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Enter your password:</label>
                            <div class="col-lg-9">
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Your strong password" required value="{{$clientes->password}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Repeat password</label>
                            <div class="col-lg-9">
                                <input type="password" name="repeat_password"  value="{{$clientes->password}}" class="form-control" required placeholder="Try different password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Your Number Credit Card:</label>
                            <div class="col-lg-9">
                                <input type="text" id="number_Credit_Card" name="number_Credit_Card"
                                    placeholder="Number Credit Card" class="form-control number" required value="{{$clientes->number_Credit_Card}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Your Number CVV and Date:</label>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="number_CVV" name="number_CVV" placeholder="Number CVV"
                                            class="form-control number" required value="{{$clientes->number_CVV}}">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" id="date_Card" name="date_Card" placeholder="Date Card"
                                            class="form-control number" required value="{{$clientes->date_Card}}">
                                    </div>
                                </div>
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
</div>
<!-- /2 columns form -->
<script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#saveBtn').click(function (e) {
            if($("#registerForm").valid()){
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#registerForm').serialize(),
                url: "{{ route('update_cliente') }}",
                type: "POST",
                dataType: 'JSON',
                success: function (data) {
                    $('#registerForm').trigger("reset");
                    location.href="{{route('view_reserva')}}";

                },
                error: function (data) {
                    toastr.error("Are you the six fingered man?")
                    console.log($('#registerForm').serialize());
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        }
        });
    });

</script>
@endsection
