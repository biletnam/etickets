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

 Route::get('/','Eventscontroller@cards');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::prefix('event')->group(function (){
//
//});


Route::resource('/events','Eventscontroller');

Route::get('/browse','Eventscontroller@cards');
Route::get('/logout','Eventscontroller@logout');