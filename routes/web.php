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
    Route::get('/get_document/{file}','DocumentController@show')->name('admin.show');
    Route::get('/Documents_received','DocumentController@Documents_received')->name('admin.Documents_received.show');
    Route::get('/Documents_received/download/{id}','DocumentController@Documents_received_download')->name('admin.Documents_received.download');
    Route::get('/Documents_users','DocumentController@Documents_users')->name('admin.Documents_users');
    Route::get('/Documents_users/{id}','DocumentController@Documents_users_show')->name('admin.Documents_users.show');
    Route::get('/delete/user_file/{id}','DocumentController@delete_user_sends_file')->name('admin.Documents_users.delete');
    Route::get('/delete/admin_file/{id}','DocumentController@delete_admin_sends_file')->name('admin.Documents_admin.delete');
    Route::get('/process','ProcessController@index')->name('admin.process.show');
    Route::post('/process/store','ProcessController@process_store')->name('admin.process.store');
    Route::get('/process/download/{process}','ProcessController@download')->name('admin.process.download');
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
    Route::get('/download/{file}','Documents_receivedController@download')->name('user.download');
    Route::get('/download_user_file/{file}','Documents_receivedController@downloadUserFile')->name('user.downloadUserFile');
    Route::post('/send_protest/store','Documents_receivedController@send_protest')->name('user.send_protest.store');
    Route::get('/file_delete/{file}','Documents_receivedController@file_delete')->name('user.file_delete');
    Route::get('/Attorney_contract','Documents_receivedController@Attorney_contract')->name('user.Attorney contract');
});
