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

// Route::get('/Buy', 'CommerceController@goBuying');

Route::get('/sell', 'CommerceController@create');
Route::get('/port', 'CommerceController@index');
Route::post('/add_new_sheet', 'CommerceController@store');
Route::get('/managePort/{id}', 'CommerceController@edit');

Route::get('/store', 'ProfileController@index');

Route::get('/account', 'AccountsController@index');

Route::post('shop/buy','ShopsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
