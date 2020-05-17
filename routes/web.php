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

Route::get('payment', 'PaypleController@index');
Route::post('charge', 'PaypleController@charge');
Route::get('paymentsuccess', 'PaypleController@payment_success');
Route::get('paymenterror', 'PaypleController@payment_error');
