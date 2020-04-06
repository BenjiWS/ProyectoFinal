@extends('home')
@section('seccion')
@include('user.assignRol')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table Users</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route ('view_create_user')}}" class="btn btn-primary rounded-round">AGREGAR USER</a>
    </div>


    <div class="card">
        <div class="card-body"></strong>
        </div>
        <table class="table datatable-basic data-table" id="tabla-user">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CI</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th width="300px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
            <div class="col-md-7">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Roles Asignados</h5>
                </div>
            <div class="card-body"></strong>
            </div>
            <table class="table datatable-basic data-table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="200px">Name</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('view_user') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: "ci",
                    name: 'ci'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'lastname',
                    name: 'lastname'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'state',
                    name: 'state'
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        var table1 = $('.data-table-1').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajaxuserroles.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'user_id',
                    name: 'user_id'
                },
                {
                    data: 'role_id',
                    name: 'role_id'
                }
            ]
        });
        $('body').on('click', '.assignRol', function () {
            var idUser = $(this).data("id");
            console.log(idUser);
            $('#registerForm').trigger("reset");
            $('#saveBtn').val("create-product");
            $('#idUser').val(idUser);
            $('#modelHeading').html("Assing Rol");
            $('#ajaxRol').modal('show');
        });
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#registerForm').serialize(),
                url: "{{ route('ajaxuserroles.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#registerFormRol').trigger("reset");
                    $('#ajaxRol').modal('hide');
                    table1.draw();

                },
                error: function (data) {
                    console.log($('#registerForm').serialize());
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
        $('body').on('click', '.stateUser', function () {
            var idUser = $(this).data("id");
            $.ajax({
                type: "DELETE",
                url: "{{ route('ajaxuser.store') }}" + '/' + idUser,
                success: function (data) {
                    $('#tabla-user').DataTable().draw(true);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });

</script>
@endsection