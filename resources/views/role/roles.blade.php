@extends('home')
@section('seccion')
@include('role.register')
<!-- Basic datatable -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table Roles</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>
    <div class="card-body"></strong>
    </div>
    <div class="text-center" style="justifi">
        <a href="javascript:void(0)" id="createNew" class="btn btn-primary rounded-round" data-toggle="modal"
            data-target="#modalContactForm">AGREGAR</a>
    </div>
    <table class="table datatable-basic data-table" id="tabla-rol">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>State</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
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
            ajax: "{{ route('ajaxroles.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'state',
                    name: 'state'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#createNew').click(function () {
            $('#saveBtn').val("create-product");
            $('#idRole').val('');
            $('#registerForm').trigger("reset");
            $('#modelHeading').html("Create New Role");
            $('#ajaxModel').modal('show');
        });
        $('#saveBtn').click(function (e) {
            if($("#registerForm").valid()){
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#registerForm').serialize(),
                url: "{{ route('ajaxroles.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    console.log($('#registerForm').serialize());
                    $('#registerForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();

                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        }
        });
        
        $('body').on('click', '.editRol', function () {
            var idRole = $(this).data('id');
            $.get("{{ route('ajaxroles.index') }}" + '/' + idRole + '/edit',
                function (data) {
                    $('#modelHeading').html("Edit Rol");
                    $('#register').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#idRole').val(data.id);
                    $('#name').val(data.name);
                })
        });
        $('body').on('click', '.stateRol', function () {
            var rol_id = $(this).data("id");
            $.ajax({
                type: "DELETE",
                url: "{{ route('ajaxroles.store') }}" + '/' + rol_id,
                success: function (data) {
                    $('#tabla-rol').DataTable().draw(true);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });

</script>
@endsection
