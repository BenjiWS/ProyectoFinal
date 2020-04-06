@extends('home')
@section('seccion')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table Rooms</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route ('view_create_room')}}" class="btn btn-primary rounded-round">AGREGAR ROOM</a>
       </div>
          <table class="table datatable-basic dataTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>NumberBeds</th>
                        <th>NumberBathroom</th>
                        <th>NumberTV</th>
                        <th>Cradle</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
</div>
<script>
    $(document).ready(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        var table=$('.dataTable').DataTable({
        serverside:true,
        processing:true,
        ajax:"{{route('view_roomUser')}}",
        columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data:'name',
                    name:'name'
                },
                {
                    data:'price',
                    name:'price'
                },
                {
                    data:'type',
                    name:'type'
                },
                {
                    data:'numberBeds',
                    name:'numberBeds'
                },
                {
                    data:'numberBathroom',
                    name:'numberBathroom'
                },
                {
                    data:'numberTV',
                    name:'numberTV'
                },
                {
                    data:'cradle',
                    name:'cradle'
                },
                {
                    data:'state',
                    name:'state',
                }
            ]
        });

    });
</script>
@endsection