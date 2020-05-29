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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin','AdminController@index');
Route::post('/addimage','AdminController@store')->name('addimage');
Route::get('/adminpage', 'AdminController@display');
Route::get('/editimage/{id}','AdminController@edit');
Route::put('/updateimage/{id}','AdminController@update');
Route::get('/menu','menuController@index');

