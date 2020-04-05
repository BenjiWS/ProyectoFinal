<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/ViewCreateUser', function () {return view('user.register');
        })->name('view_create_user');      
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


