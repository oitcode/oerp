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

/* Account */
Route::get('/account', 'Account\MHomeController@showAccHome')->name('accHome');
Route::get('/account/daybook', 'Account\DaybookController@showDayBookMenu');
Route::get('/account/daybook/create',
           'Account\DaybookController@showDaybookEntryForm')
           ->name('accMHome');

