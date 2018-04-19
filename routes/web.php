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

Route::get('/customers', 'ClientController@customers')->middleware('auth');

Route::get('/customer/add', function () {
    return view('addCustomer');
})->middleware('auth');

Route::get('/vendors',  'ClientController@vendors')->middleware('auth');

Route::get('/vendor/add', function () {
    return view('addVendor');
})->middleware('auth');



Route::get('/currency-exchange', function () {
    return view('currencyExchange');
})->middleware('auth');

Route::resource('client','ClientController')->middleware('auth');
Route::resource('sales-tax','SalesTaxController')->middleware('auth');
Route::resource('currency-exchange','CurrencyExchangeController')->middleware('auth');
Route::resource('ioperation','IoperationController')->middleware('auth');
Route::resource('order','OrderController')->middleware('auth');
Route::resource('challan','ChallanController')->middleware('auth');
Route::resource('invoice','CommercialinvoiceController')->middleware('auth');
Route::resource('receipt','ReceiptController')->middleware('auth');
Route::resource('cashreceipt','CashPaymentReceiptController')->middleware('auth');
Route::resource('bill','BillController')->middleware('auth');
Route::resource('goods','GoodDeclarationController')->middleware('auth');
Route::resource('importinvoice','ImportInvoiceController')->middleware('auth');
Route::get('report','ReportController@index')->middleware('auth');
Route::get('/report/commercial_invoice',  'ReportController@commercial_invoices')->middleware('auth');
Route::get('/allreceipt', function () {
    return view('indexall');
})->middleware('auth');



Route::get('/clientsearch',  'ClientController@dataAjax')->middleware('auth');
//Route::get('client/search', 'Select2AutocompleteController@dataAjax');
Route::get('/ledger',  'LedgerController@index')->middleware('auth');
Route::get('/ledger/show',  'LedgerController@show')->middleware('auth');
Route::post('/ledger',  'LedgerController@load')->middleware('auth');