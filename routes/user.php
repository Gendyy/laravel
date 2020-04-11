<?php


Route::get('/', function () {
    return view('welcome');
});



use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::get('/testmails', function () {

    $data = ['message' => 'This is a test!'];

    Mail::to('osamahmuhammed@gmail.com')->send(new MailtrapExample($data));


});



Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('change-password', 'User\ChangeUserPasswordController@index');
Route::post('change-password', 'User\ChangeUserPasswordController@store')->name('change.password');