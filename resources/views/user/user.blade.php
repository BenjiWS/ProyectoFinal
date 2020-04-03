@extends('home')
@section('seccion')
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
          <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ci</th>
                        <th>name</th>
                        <th>lastname</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>status</th>
                        <th>Botton</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr-shadow">
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user -> id}}  </td>
                            <td>{{$user -> ci}}    </td>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> lastname}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> phone}}</td>
                            <td>{{$user-> state}} </td>
                            <td><a href="{{route('view_actualizar', $user->id)}}">Update</a></td>
                        </tr>
                         @endforeach 
                    </tr>
                </tbody>
            </table>
</div>
@endsection