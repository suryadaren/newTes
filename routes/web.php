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

Route::get('/', 'usercontroller@index');
Route::get('/create', 'usercontroller@create');
Route::post('/simpanUser', 'usercontroller@simpanUser');
Route::get('/edit/{id}', 'usercontroller@edit');
Route::put('/updateUser/{id}', 'usercontroller@updateUser');
Route::get('/delete/{id}', 'usercontroller@delete');

Route::get('/login', 'usercontroller@login');
Route::post('/checkLogin', 'usercontroller@checkLogin');
