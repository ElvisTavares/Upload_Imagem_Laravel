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
    return view('welcome');
});

Route::get('up', 'UploadController@create');
Route::post('up', 'UploadController@store');
Route::get('list', 'UploadController@index');
Route::get('edit_img{id}','UploadController@edit' );
Route::get('edit_img{id}' , 'UploadController@update');
