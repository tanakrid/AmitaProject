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
    return view('shop.HomePage');
});

Route::get('/FrontLine', 'ShopsController@index');
Route::get('/sheet/{id}', 'ShopsController@show');

Route::get('/Buy', 'CommerceController@goBuying');

Route::get('/sell', 'CommerceController@create');
Route::get('/port', 'CommerceController@index');
Route::get('/managePort/{id}', 'CommerceController@edit');

Route::get('/store', 'ProfileController@index');




