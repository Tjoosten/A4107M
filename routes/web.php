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

Route::get('/', 'HomeController@index');

Auth::routes();

// Home routes.
Route::get('/home', 'HomeController@backend');

// Lease routes
Route::get('/lease', 'LeaseController@index')->name('lease.index');
Route::get('/lease/request', 'LeaseController@leaseRequest')->name('lease.request');
Route::post('/lease/store', 'LeaseController@leaseStore')->name('lease.store');
Route::get('/lease/access', 'LeaseController@domainAccess')->name('lease.access');
Route::get('/lease/calendar', 'LeaseController@Calendar')->name('lease.calendar');
