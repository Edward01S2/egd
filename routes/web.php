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

use App\Ticket;

Route::get('/tickets', 'TicketsController@index');
Route::get('/tickets/create', 'TicketsController@create');
Route::post('/tickets/create', 'TicketsController@create');
Route::post('/tickets', 'TicketsController@store');
Route::get('/tickets/{ticket}', 'TicketsController@show');
Route::get('/tickets/{ticket}/download', 'TicketsController@download');
//Route::get('/tickets/{ticket}/edit', 'TicketsController@edit');

Route::get('/intrusion', 'IntrusionController@index');
Route::get('/intrusion/create', 'IntrusionController@create');
Route::post('/intrusion/create', 'IntrusionController@create');
Route::post('/intrusion', 'IntrusionController@store');
Route::get('/intrusion/{intrusion}', 'IntrusionController@show');
Route::get('intrusion/{intrusion}/download', 'IntrusionController@download');

Route::get('/exposure', 'ExposureController@index');
Route::get('/exposure/create', 'ExposureController@create');
Route::post('/exposure/create', 'ExposureController@create');
Route::post('/exposure', 'ExposureController@store');
Route::get('/exposure/{expo}', 'ExposureController@show');
Route::get('/exposure/{expo}/download', 'ExposureController@download');

Route::get('/pst', 'PSTController@index');
Route::get('/pst/create', 'PSTController@create');
Route::post('/pst/create', 'PSTController@create');
Route::post('/pst', 'PSTController@store');
Route::get('/pst/{pst}', 'PSTController@show');
Route::get('/pst/{pst}/download', 'PSTController@download');

Route::get('/ist', 'ISTController@index');
Route::get('/ist/create', 'ISTController@create');
Route::post('/ist/create', 'ISTController@create');
Route::post('/ist', 'ISTController@store');
Route::get('/ist/{ist}', 'ISTController@show');
Route::get('/ist/{ist}/download', 'ISTController@download');

Route::get('/addon', 'AddonController@index');
Route::get('/addon/create', 'AddonController@create');
Route::post('/addon/create', 'AddonController@create');
Route::post('/addon', 'AddonController@store');
Route::get('/addon/{addon}', 'AddonController@show');
Route::get('/addon/{addon}/download', 'AddonController@download');

Route::get('/complete', function () {
    return view('complete');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

