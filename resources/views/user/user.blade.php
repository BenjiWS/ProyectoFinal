@extends('home')
@section('seccion')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <div class="table-data__tool-left">   
                <h3 class="title-5 m-b-35">User Table</h3>
            </div>
            <div class="table-data__tool-right">
                <a href="{{route ('view_create_user')}}" style="color:white" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add User</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
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
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection