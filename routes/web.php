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
Route::group(['prefix'=>'admin','namespace'=>'admin'],function (){
    Route::get('/Dashboard','DashboardController@index')->name('admin.Dashboard');
    Route::get('/send_document','DocumentController@Document_show')->name('admin.Document_show');
    Route::post('/send_document/store','DocumentController@Document_show_store')->name('admin.Document_show.store');






});

Route::group(['prefix'=>'user','namespace'=>'user'],function (){

    Route::get('/Dashboard','DashboardController@index')->name('user.dashboard');
    Route::get('/one','Documents_receivedController@one')->name('user.one');
    Route::get('/two','Documents_receivedController@two')->name('user.two');
    Route::get('/three','Documents_receivedController@three')->name('user.three');
    Route::get('/four','Documents_receivedController@four')->name('user.four');
    Route::get('/five','Documents_receivedController@five')->name('user.five');
    Route::get('/six','Documents_receivedController@six')->name('user.six');
    Route::get('/seven','Documents_receivedController@seven')->name('user.seven');
    Route::get('/eight','Documents_receivedController@eight')->name('user.eight');
    Route::get('/nine','Documents_receivedController@nine')->name('user.nine');


});
