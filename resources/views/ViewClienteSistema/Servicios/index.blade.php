@extends('ViewClienteSistema.home')
@section('seccion')
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
    <?php
	$id =Auth::user()->idCliente;	
	?>
    <div class="card-body"></strong>
        <form id="registerForm" name="registerForm">
        <input type="hidden" value="{{ $id }}" id="idCliente" name="idCliente">
        <input type="hidden" value="" id="idService" name="idService">
        </form>
    </div>
    <table class="table datatable-basic data-table" id="tabla-rol">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actuin</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div class="col-md-6" style="margin-bottom:50px">
        <table class="table datatable-basic data-table1">
            <thead>
                <tr>
                    <th>Service </th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    @if($cliente -> idCliente == $id)
                        <tr>
                            <td>{{ $cliente-> idService }} </td>
                            <td>{{ $cliente -> Date }} </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
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
            ajax: "{{ route('view_service_cliente') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
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
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
         $('.data-table1').DataTable({    
    });
    $('body').on('click', '.solicitarService', function () {
            var idServicio = $(this).data("id");
            $('#idService').val(idServicio);
            $.ajax({
                data: $('#registerForm').serialize(),
                url: "{{ route('ajaxservicecliente.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    table.draw();
                    window.location.href="{{ route('view_service_cliente') }}";

                },
                error: function (data) {
                    console.log($('#registerFormRol').serialize());
                    $('#saveBtn').html('Save Changes');
                }
            });
            });
});
</script>
@endsection
