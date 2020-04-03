@extends('home')
@section('seccion')
@include('role.register')
           <!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Table Roles</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="" class="btn btn-primary rounded-round" data-toggle="modal" data-target="#modalContactForm">AGREGAR</a>
                       </div>
                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>State</th>
                                <th>Options</th>
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
				<!-- /basic datatable -->
        <!-- DATA TABLE -->
       
@endsection