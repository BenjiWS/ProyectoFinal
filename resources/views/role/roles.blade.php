@extends('home')
@section('seccion')
@include('role.register')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">AGREGAR</a>
           </div>
        <!-- DATA TABLE -->
        <div class="table-responsive table-responsive-data2">
           <table id="example" class="display table table-data2" style="width:100%;border-bottom:0px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>State</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                    <tr>
                        <td>{{$rol -> id}}</td>
                        <td>{{$rol -> name}} </td>
                        <td>{{$rol -> state}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
        <!-- END DATA TABLE -->
</div>
@endsection