@extends('home')
@section('seccion')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Roles Table</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-center">
                <a href="{{route ('view_create_user')}}" style="color:white" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add Role</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>state</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr-shadow">
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{$role -> id}}  </td>
                            <td>{{$role -> name}}</td>
                            <td>{{$role-> state}} </td>
                            <td><a href="{{route('view_actualizar_role', $role->id)}}">Update</a></td>
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