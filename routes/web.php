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

Route::middleware(['auth'])->group(function () {
	//Usuarios
	Route::get('/ViewUser', 'UserController@index')->name('view_user')
        ->middleware('role:Admin');   
    Route::get('/ViewCreateUser', function () {return view('user.register');
        })->name('view_create_user')->middleware('role:Admin');      
    Route::post('/CreateUser','UserController@create')-> name('create_user')
        ->middleware('role:Admin');
    Route::get('/Actualizar/{id}','UserController@edit')->name('view_actualizar')
        ->middleware('role:Admin'); 
    Route::post('/Actualizar/{id}','UserController@update')->name('actualizar')
        ->middleware('role:Admin'); 

    //Roles
    Route::get('/ViewRole', 'RoleController@index')->name('view_role')
        ->middleware('role:Admin');  
    Route::get('/ViewCreateRole', function () {return view('role.register');
        })->name('view_create_role')->middleware('role:Admin');      
    Route::post('/CreateRol','RoleController@create')-> name('create_role')
        ->middleware('role:Admin');  

    //Rooms
   /* Route::get('/ViewRoom', 'RoomController@index')->name('view_room')
    ->middleware('role:Admin');*/
    Route::resource('rooms','RoomController');

   /* Route::get('/ViewCreateRoom', function () {return view('rooms.registerRoom');
    })->name('view_create_room')->middleware('role:Admin'); 
    Route::post('/CreateUser','UserController@create')-> name('create_user')
        ->middleware('role:Admin');*/
});    


