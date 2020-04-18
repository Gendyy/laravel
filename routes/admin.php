<?php


Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');




Route::middleware('admin')->group( function () {
    
Route::get('/home', 'Admin\AdminController@index')->name('admin.dashboard');
Route::get('/home', 'Admin\AdminCounterController@index')->name('count.admin');
Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/users', 'Admin\UserMangeController@index')->name('admin.users.index');
Route::get('/users/create', 'Admin\UserMangeController@create')->name('admin.users.store');
Route::post('/users', 'Admin\UserMangeController@store');
Route::get('/users/{user}', 'Admin\UserMangeController@show');
Route::get('/users/{user}/edit', 'Admin\UserMangeController@edit')->name('admin.users.edit');
Route::put('/users/{user}', 'Admin\UserMangeController@update');
Route::delete('/users/{user}', 'Admin\UserMangeController@destroy');
Route::get('/users/status/update', 'Admin\UserMangeController@updateStatus')->name('users.update.status');


});




Route::namespace('admin')->group(function() {

    Route::get('change-pass', 'ChangeAdminPasswordController@index')->name('change-pass');
    Route::post('change-pass', 'ChangeAdminPasswordController@store')->name('change.adminpassword');

});

