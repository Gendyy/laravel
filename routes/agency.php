<?php


Route::get('/login', 'Auth\AgencyLoginController@showLoginForm')->name('agency.login');
Route::post('/login', 'Auth\AgencyLoginController@login')->name('agency.login.submit');

Route::middleware('agency')->group( function () {

    Route::get('/home', 'Agency\AgencyController@index')->name('agency.dashboard');
    Route::post('/logout', 'Auth\AgencyLoginController@logout')->name('agency.logout');


});

Route::resource('offers', 'Agency\OfferController');
