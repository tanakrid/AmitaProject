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

Route::get('/shop/index', 'ShopsController@index');
Route::get('/sheet/{id}', 'ShopsController@show');
Route::get('/sheet/own/{id}', 'ShopsController@showOwnSheet');
Route::post('shop/buy','ShopsController@store');

Route::get('/sell', 'CommerceController@create');
Route::get('/port', 'CommerceController@index');
Route::post('/add_new_sheet', 'CommerceController@store');
Route::get('/managePort/{id}', 'CommerceController@edit');
Route::get('/editSheet/{id}', 'CommerceController@editSheet');
Route::delete('/deleteSheet/{id}', 'CommerceController@destroy');
Route::put('/updateSheet/{id}', 'CommerceController@update');

Route::get('/store', 'ProfileController@index');

Route::get('/account', 'AccountsController@index');

Auth::routes();

Route::get('/home', function () {
    return view('shop.HomePage');
});
