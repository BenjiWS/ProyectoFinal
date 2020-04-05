@extends('home')
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
    <div class="card-body"></strong>
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
            ajax: "{{ route('view_service_user') }}",
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
    });

</script>
@endsection
