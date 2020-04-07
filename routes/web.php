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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::get('/testmails', function () {

    $data = ['message' => 'This is a test!'];

    Mail::to('osamahmuhammed@gmail.com')->send(new MailtrapExample($data));


});