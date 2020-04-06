@extends('home')
@section('seccion')
<!-- Basic datatable -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table Reservation</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>
    <div class="card-body"></strong>
    </div>
    <table class="table datatable-basic data-table" id="tabla-rol">
        <thead>
            <tr>
                <th>ID</th>
                <th>Room</th>
                <th>Cliente</th>
                <th>Star Date</th>
                <th>End Date</th>
                <th>Type</th>
                <th>State</th>
                <th>Penalty</th>
                <th>State Username</th>
                <th width="100px">Action</th>
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
            ajax: "{{ route('view_reserva') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'idRoom',
                    name: 'idRoom'
                },
                {
                    data: 'idCliente',
                    name: 'idCliente'
                },
                {
                    data: 'startDate',
                    name: 'startDate'
                },
                {
                    data: 'endDate',
                    name: 'endDate'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'state',
                    name: 'state'
                },
                {
                    data: 'penalty',
                    name: 'penalty'
                },
                {
                    data: 'stateUsername',
                    name: 'stateUsername'
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

</script>
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table Cliente</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>
    <div class="card-body"></strong>
    </div>
    <table class="table datatable-basic data-table-2" id="tabla-rol">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Credit Card</th>
                <th>CVV</th>
                <th>Date</th>
                <th width="100px">Action</th>
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
        var table = $('.data-table-2').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('view_cliente') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
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
                    data: 'number_Credit_Card',
                    name: 'number_Credit_Card'
                },
                {
                    data: 'number_CVV',
                    name: 'number_CVV'
                },
                {
                    data: 'date_Card',
                    name: 'date_Card'
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

</script>
@endsection
