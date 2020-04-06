<?php

use Illuminate\Support\Facades\Route;
use App\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/user', 'UserController@index')->name('userview');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->middleware('role:Admin')->group(function () {
	//Usuarios
    Route::get('/ViewUser', 'UserController@index')->name('view_user');   
    Route::get('/ViewCreateUser', "UserController@Roles")->name('view_create_user');      
    Route::post('/CreateUser','UserController@create')-> name('create_user');
    Route::get('/Actualizar/{id}','UserController@edit')->name('view_actualizar'); 
    Route::post('/Actualizar/{id}','UserController@update')->name('actualizar'); 

    //Roles
    Route::resource('ajaxroles','RoleController');  
    Route::get('/ViewRole', 'RoleController@index')->name('view_role');  
    Route::POST('/ViewRole', 'RoleController@stateChange')->name('update_role');  

    //Rooms
    Route::get('/ViewRoom', 'RoomController@index')->name('view_room');
    Route::get('/ViewCreateRoom', function () {return view('rooms.register');
    })->name('view_create_room'); 
    Route::post('/CreateRoom','RoomController@create')-> name('create_room');
    Route::get('/ActualizarRoom/{id}','RoomController@edit')->name('view_update_room'); 
    Route::post('/ActualizarRoom/{id}','RoomController@update')->name('update_room');

    //SERVICES
    Route::resource('ajaxservices','ServiceController');  
    Route::get('/ViewService', 'ServiceController@index')->name('view_service');  
});    
Route::middleware(['auth'])->middleware('role:User')->group(function () {


    Route::get('/ViewRoomUser', 'RoomController@indexUser')->name('view_roomUser');
    Route::get('/ViewServiceUser', 'ServiceController@indexUser')->name('view_service_user');
    Route::resource('ajaxreserva','ReservationController');  
    Route::get('/ViewReserva', 'ReservationController@index')->name('view_reserva');
    Route::get('/ViewReserva2', 'ClienteController@index')->name('view_cliente');  
    Route::get('/ViewCreateCliente', function () {return view('cliente.register');
    })->name('view_create_cliente');  
    Route::get('/ViewCreateReserva', function () {return view('reservas.register');
    })->name('view_create_reserva');  
    Route::get('/ActualizarCliente/{id}','ClienteController@edit')->name('view_update_cliente'); 
    Route::post('/ActualizarCLiente','ClienteController@actualizar')->name('update_cliente');
    Route::resource('ajaxcliente','CLienteController');
    Route::resource('ajaxreserva','ReservaController');
    

});


