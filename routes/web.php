<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

    // $data =[
    //     'title'=> 'Hi! Mail Gun is Up and running',
    //     'content' => 'This is a laravel course with lots of love & dedication '
    // ];

    // Mail::send('mail.template', $data, function ($message) {
    //     $message->sender('luciferbusiness3@gmail.com', 'Ritwik');
    //     $message->to('r.biswas10082011@gmail.com', 'Ritwik');
    //     $message->subject('Hello Ritwik! How are you');
    // });


    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/admin', function () {
//     return view('admin.index');
// });



Route::resource('/admin/users', 'AdminUsersController');
