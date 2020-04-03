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
        <a href="{{route ('view_create_room')}}" class="btn btn-primary rounded-round">AGREGAR USER</a>
       </div>
          <table class="table datatable-basic">
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
                    <tr class="tr-shadow">
                        @foreach ($rooms as $room)
                        <tr>
                            <td>{{$room -> number}}</td>
                            <td>{{$room -> name}}</td>
                            <td>{{$room -> price}}</td>
                            <td>{{$room -> type}}</td>
                            <td>{{$room -> numberBeds}}</td>
                            <td>{{$room -> numberBathroom}}</td>
                            <td>{{$room-> numberTV}} </td>
                            <td>{{$room-> cradle}} </td>
                            <td>{{$room-> state}} </td>
                            <td><a href="{{route('view_actualizar', $room->id)}}">Update</a></td>
                        </tr>
                         @endforeach 
                    </tr>
                </tbody>
            </table>
</div>
@endsection