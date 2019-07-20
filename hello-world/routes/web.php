<?php

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

Route::get('/hello', 'HelloController@index');

Route::get('/calc', 'CalculateController@sumForm');

Route::get('/students', 'StudentController@index');

Route::get('/classes', 'ClassRoomController@index');

Route::post('/result', 'CalculateController@sumResult');
