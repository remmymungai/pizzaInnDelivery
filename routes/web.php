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

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin','AdminController@index');
Route::post('/addimage','AdminController@store')->name('addimage');
Route::get('/adminpage', 'AdminController@display');
Route::get('/editimage/{id}','AdminController@edit');
Route::put('/updateimage/{id}','AdminController@update');
Route::get('/menu','menuController@index')->name('menu.landing');
Route::get('/delete/{id}','AdminController@delete');

Route::prefix('cart')->name('cart.')->group(function () {

    Route::get('/', 'CartController@index')->name('index');
    Route::post('/', 'CartController@store')->name('store');
    Route::put('/', 'CartController@update')->name('update');
    Route::delete('/', 'CartController@remove')->name('remove');
    Route::delete('/manage', 'CartController@destroy')->name('manage.destroy');

});
Route::prefix('checkout')->name('checkout.')->group(function(){
    Route::post('/','CheckoutController@store')->name('create');
});

Route::get('/order', 'ordersController@show');
 Route::get('/start/{id}', 'ordersController@start');
 Route::get('/complete/{id}', 'ordersController@complete');
