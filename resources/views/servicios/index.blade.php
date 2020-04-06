@extends('home')
@section('seccion')
@include('servicios.register')
<!-- Basic datatable -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table Services</h5>
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
        <a href="javascript:void(0)" id="createNewService" class="btn btn-primary rounded-round" data-toggle="modal"
            data-target="#modalContactForm">AGREGAR</a>
    </div>
    <table class="table datatable-basic data-table" id="tabla-rol">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Description</th>
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
            ajax: "{{ route('ajaxservices.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'description',
                    name: 'description'
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

        $('#createNewService').click(function () {
            $('#saveBtn').val("create-product");
            $('#idService').val('');
            $('#registerForm').trigger("reset");
            $('#modelHeading').html("Create New Service");
            $('#ajaxModel').modal('show');
        });

        $('#saveBtn').click(function (e) {
            if($("#registerForm").valid()){
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                type: "POST",
                url: "{{ route('ajaxservices.store') }}",
                data: $('#registerForm').serialize(),
                dataType: "JSON",
                success: function (response) {
                    $('#registerForm').trigger('reset');
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function (error) {
                    console.log(error);
                }
            });
          }
        });

        $('body').on('click', '.editService', function () {
            var idRole = $(this).data('id');
            $.get("{{ route('ajaxservices.index') }}" + '/' + idRole + '/edit',
                function (data) {
                    $('#modelHeading').html("Edit Service");
                    $('#register').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#idService').val(data.id);
                    $('#name').val(data.name);
                    $('#type').val(data.type);
                    $('#price').val(data.price);
                    $('#description').val(data.description);
                    $('#state').val(data.state);
                })
        });
        $('body').on('click', '.stateChange', function () { 
        var service_id = $(this).data("id");     
         $.ajax({
         type: "DELETE",
         url: "{{ route('ajaxservices.store') }}"+'/'+service_id,
         success: function (data) {
             table.draw();
         },
         error: function (data) {
             console.log('Error:', data);
         }
     });
 });
    });

</script>
@endsection
