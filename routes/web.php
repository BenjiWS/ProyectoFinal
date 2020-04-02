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
	//Roles
	Route::get('/ViewUser', 'UserController@index')->name('view_user')
        ->middleware('role:Admin');   
    Route::get('/ViewCreateUser', function () {return view('user.register');
        })->name('view_create_user')->middleware('role:Admin');      
    Route::post('/CreateUser','UserController@create')-> name('create_user')
        ->middleware('role:Admin');
});

