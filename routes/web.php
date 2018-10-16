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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/daily-sheet', 'HomeController@daily_sheet')->name('daily-sheet');
Route::get('/member-list', 'HomeController@member_list')->name('member-list');
Route::post('/member-store', 'HomeController@store_member')->name('member-store');

Route::delete('/member-destroy/{id}', 'HomeController@member_destroy')->name('member-destroy');

Route::get('/member-edit/{id}', 'HomeController@member_edit')->name('member-edit');

Route::put('/member-update/{id}', 'HomeController@member_update')->name('member-update');

Route::post('/transactions', 'HomeController@store_daily_sheet')->name('transactions');

Route::get('/transaction-list', 'HomeController@transaction_list')->name('transaction-list');

