<?php

use App\Http\Controllers\TodoController;
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
    return view('welcome');
});

Route::resource('todo', TodoController::class);
Route::get('/todo','App\Http\Controllers\TodoController@index');
Route::get('/todo/create','App\Http\Controllers\TodoController@create');
Route::post('/todo/store','App\Http\Controllers\TodoController@store');
Route::get('/todo/edit/{id}','App\Http\Controllers\TodoController@edit');
Route::post('/todo/update','App\Http\Controllers\TodoController@update');
Route::get('/todo/hapus/{id}','App\Http\Controllers\TodoController@hapus');
Route::get('/todo/detail/{id}','App\Http\Controllers\TodoController@show');
