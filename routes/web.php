<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/login-user', 'AuthController@login')->name('login');
Route::post('/login-user', 'AuthController@postLogin')->name('login');
Route::get('/event', 'ArtikelController@event')->name('event');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/register-user','AuthController@registerUser')->name('register');
    Route::post('/register-user','AuthController@storeUser')->name('register');
    Route::get('/logout', 'AuthController@logout' )->name('logout');

    Route::get('/create-envet', 'ArtikelController@create')->name('create-event');
    Route::post('/create-envet', 'ArtikelController@store')->name('create-event');

    Route::get('/event-delete/{slug}', 'ArtikelController@delete');
    Route::get('/event-update/{slug}', 'ArtikelController@edit');
    Route::post('/event-update/{slug}', 'ArtikelController@update');
});

Route::get('/', 'ArtikelController@index')->name('home');
Route::get('/event/{slug}', 'ArtikelController@showDetail')->name('singgel-event');


// Route::get('/tes', function () {
//     return view('gush.singgle');

// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
