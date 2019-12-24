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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/channel/index','ChannelsController@index');

Route::post('/channel/create','ChannelsController@create');

Route::get('/channel/edit/{id}', 'ChannelsController@edit');

Route::patch('/channel/update/{id}', 'ChannelsController@update');


Route::get('/shop/index','ShopsController@index');
