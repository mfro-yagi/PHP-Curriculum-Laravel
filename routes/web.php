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

Route::get('/channel/edit/update/{id}','ChannelsController@update');

Route::post('/channel/edit/update/{id}','ChannelsController@update');

Route::patch('/channel/edit/update/{id}', 'ChannelsController@update');

Route::get('/channel/delete/{id}', 'ChannelsController@delete');



Route::get('/shop/index','ShopsController@index');
