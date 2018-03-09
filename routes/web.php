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

Route::get('/customers', 'ClientController@customers');

Route::get('/customer/add', function () {
    return view('addCustomer');
});

Route::get('/vendors',  'ClientController@vendors');

Route::get('/vendor/add', function () {
    return view('addVendor');
});



Route::get('/currency-exchange', function () {
    return view('currencyExchange');
});

Route::resource('client','ClientController');
Route::resource('sales-tax','SalesTaxController');
Route::resource('currency-exchange','CurrencyExchangeController');
Route::resource('ioperation','IoperationController');
Route::resource('order','OrderController');
Route::get('/clientsearch',  'ClientController@dataAjax');
//Route::get('client/search', 'Select2AutocompleteController@dataAjax');
Route::get('/ledger',  'LedgerController@index');
Route::get('/ledger/show',  'LedgerController@show');
Route::post('/ledger',  'LedgerController@load');