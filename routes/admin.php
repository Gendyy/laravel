<?php





Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');


Route::get('change-password', 'Admin\ChangeAdminPasswordController@index');
Route::post('change-password', 'Admin\ChangeAdminPasswordController@store')->name('change.password');