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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Stores')->group(function() {
    Route::get('/stores', 'StoreController@index')->name('stores');
    Route::get('/stores/locate', 'StoreController@locate')->name('stores.locate');
    Route::get('/stores/register', 'StoreController@register')->name('stores.register');
    Route::post('/stores/register', 'StoreController@registerAction')->name('stores.register.action');
});
