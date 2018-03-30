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
//Route::get('/tickets/{ticket}/edit', 'TicketsController@edit');

Route::get('/intrusion', 'IntrusionController@index');
Route::get('/intrusion/create', 'IntrusionController@create');
Route::post('/intrusion/create', 'IntrusionController@create');
Route::post('/intrusion', 'IntrusionController@store');
Route::get('/intrusion/{intrusion}', 'IntrusionController@show');

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
