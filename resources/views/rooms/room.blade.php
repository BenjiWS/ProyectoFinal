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
          <table class="table datatable-basic data-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>number</tk>
                        <th>name</th>
                        <th>price</th>
                        <th>type</th>
                        <th>numberBeds</th>
                        <th>numberBathroom</th>
                        <th>numberTV</th>
                        <th>cradle</th>
                        <th>state</th>
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
        ajax:"{{route('view_room')}}",
        columns: [
                {
                    data:'number',
                    name:'number'
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
                    name:'numberbathroom'
                },
                {
                    data:'numberTv',
                    name:'numberTv'
                },
                {
                    data:'cradle',
                    name:'cradle'
                },
                {
                    data:'state',
                    name:'state',
                    orderable:false,
                    searchable:false
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false, 
                    searchable: false
                }
            ]
        });


});
</script>
@endsection