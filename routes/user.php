<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/home', 'User\UserCounterController@index')->name('count.users');


Route::get('/home', 'User\UserController@index');
Route::get('/users/{user}/edit', 'User\UserController@edit');
Route::put('/users/{user}', 'User\UserController@update');

Route::post('/upload', 'User\UserController@uploadImage')->name('upload.picture');

Route::get('change-password', 'User\ChangeUserPasswordController@index');
Route::post('change-password', 'User\ChangeUserPasswordController@store')->name('change.userpassword');

