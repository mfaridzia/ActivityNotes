<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//Profile user
Route::get('/profile', 'UserController@index');
Route::get('/profile/{id}/edit', 'UserController@edit');
Route::put('/profile/{id}', 'UserController@update');

//Activity
Route::get('/activity', 'ActivityController@index');
Route::get('/activity/create', 'ActivityController@create');
Route::post('/activity', 'ActivityController@store');
Route::get('/activity/{id}/edit', 'ActivityController@edit');
Route::put('/activity/{id}', 'ActivityController@update');
Route::delete('/activity/{id}', 'ActivityController@destroy');

//Events
Route::get('/events', 'EventController@index');
Route::get('/events/create', 'EventController@create');
Route::post('/events', 'EventController@store');
Route::get('/events/{id}/edit', 'EventController@edit');
Route::put('/events/{id}', 'EventController@update');
Route::delete('/events/{id}', 'EventController@destroy');