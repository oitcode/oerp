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

/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
| Authentication Routes
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|
| Here you have routes authentication.
|
*/
Auth::routes();

/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
| Home page Route
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|
| Here you have route for home page.
|
*/
Route::get('/home', 'HomeController@index')
    ->name('home');

/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
| Account
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|
| Here you have routes for account module.
|
*/
Route::get('/account', 'Account\MHomeController@showAccHome')
    ->name('accHome');
Route::get('/account/daybook', 'Account\DaybookController@showDayBookMenu');
Route::get('/account/daybook/create',
           'Account\DaybookController@showDaybookEntryForm')
    ->name('accMHome');

/*
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
| Shop
|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|
| Here you have routes for shop module.
|
*/
Route::get('/shop', 'Shop\MHomeController@showShopHome')
    ->name('shopHome');

/* Products */
Route::get('/shop/products', 'Shop\ProductMenuController@showProductMenuPage')
    ->name('productHome');
Route::get('/shop/products/create', 'Shop\ProductController@showProductCreatePage')
    ->name('productCreate');
Route::post('/shop/products/create/process', 'Shop\ProductController@productCreate')
    ->name('productCreateProcess');
Route::get('/shop/products/list', 'Shop\ProductController@listProducts');

/* Sales */
Route::get('/shop/sales', 'Shop\SalesMenuController@showSalesMenuPage')
    ->name('salesHome');
Route::get('/shop/sales/daybook', 'Shop\SalesDaybookController@showDaybookEntryPage')
    ->name('daybookEntry');

