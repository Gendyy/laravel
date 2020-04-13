<?php


Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/home', 'Admin\AdminController@index')->name('admin.dashboard');
Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/home', 'Admin\AdminCounterController@index')->name('count.admin');



Route::namespace('admin')->group(function() {

    Route::get('change-pass', 'ChangeAdminPasswordController@index');
    Route::post('change-pass', 'ChangeAdminPasswordController@store')->name('change.adminpassword');

});

