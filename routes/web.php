<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::namespace('Stores')->group(function() {
    Route::get('/stores', 'StoreController@index')->name('stores');
    Route::get('/stores/locate', 'StoreController@locate')->name('stores.locate');
    Route::get('/stores/register', 'StoreController@register')->name('stores.register');
    Route::post('/stores/register', 'StoreController@registerAction')->name('stores.register.action');
});

Route::namespace('Common')->group(function() {
    Route::get('/common/{view}', 'CommonController@page')->name('common.page');
});

Route::namespace('Volunteers')->group(function() {
    Route::get('/volunteers/register', 'VolunteersController@register')->name('volunteers.register')->middleware('auth');
});

Route::namespace('Auth')->group(function() {
    Route::get('/login/{provider}', 'LoginController@loginWithProvider')->name('login.provider');
    Route::get('/login/handle/{provider}', 'LoginController@handle')->name('login.handle');
});


