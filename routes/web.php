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
    return view('auth/login');
});

Auth::routes();

Route::get('export', 'HomeController@export')->name('export');
Route::post('import', 'HomeController@import')->name('import');
Route::post('delete', 'HomeController@delete')->name('delete');
Route::post('deleteone/{id}', 'HomeController@deleteone');
Route::get('edit/{id}', 'HomeController@edit');
Route::post('update', 'HomeController@update')->name('update');
Route::post('changePassword', 'HomeController@changePassword')->name('changePassword');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
