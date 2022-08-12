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
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

//appointment
Route::post('save_appointment' , 'App\Http\Controllers\AppointmentController@save_appointment');
Route::get('test_app' , 'App\Http\Controllers\AppointmentController@test_app');

//blogs
Route::get('blogs' , 'App\Http\Controllers\BlogsController@index');
Route::get('AddBlogs' , 'App\Http\Controllers\BlogsController@create');
Route::post('insertBlog' , 'App\Http\Controllers\BlogsController@insert');
Route::get('EditBlogs/{id}' , 'App\Http\Controllers\BlogsController@edit');
Route::post('UpdateBlogs/{id}' , 'App\Http\Controllers\BlogsController@update');

// Reservation

Route::get('penddings' , 'App\Http\Controllers\AppointmentController@penddings');