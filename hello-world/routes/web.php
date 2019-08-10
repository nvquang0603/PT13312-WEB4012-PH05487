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

Route::get('/students', 'StudentController@index')->name('students');

Route::group(
    [
        'prefix' => 'classes',
        'as' => 'classes.',
        'middleware' => ['auth', 'active.admin', 'university.admin']
    ],
    function () {
        Route::get('/', 'ClassRoomController@index')->name('list');
        Route::get('add', 'ClassRoomController@createForm')->name('add');
        Route::post('create-post', 'ClassRoomController@create')->name('create-post');
        Route::get('{class}/edit', 'ClassRoomController@editForm')->name('edit');
        Route::post('update-post', 'ClassRoomController@update')->name('update');
        Route::get('{class}/delete', 'ClassRoomController@delete')->name('delete');
    }
);
Route::group(
    ['prefix' => 'admins', 'as' => 'admins.'],
    function () {
        Route::get('/', 'AdminController@index')->name('list');
        Route::get('add', 'AdminController@createForm')->name('add');
        Route::post('create-admin', 'AdminController@create')->name('create-admin');
        Route::get('{admin}/edit', 'AdminController@editForm')->name('edit');
        Route::post('update-admin', 'AdminController@update')->name('update');
        Route::get('{post}/delete', 'AdminController@delete')->name('delete');
        Route::get('login', 'AdminController@login')->name('login');
        Route::post('login', 'AdminController@postLogin')->name('post-login');
        Route::get('logout', 'AdminController@logout')->name('logout');
        Route::get('register', 'AdminController@register')->name('register');
        Route::post('register', 'AdminController@submitRegister')->name('submit-register');
    }
);

Route::post('/result', 'CalculateController@sumResult');

Route::get('/users', function() {
    return view('user');
});
Route::get('/admin', function() {
    return view('admin.class');
});
