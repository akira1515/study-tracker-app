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

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/testmail', function(){
    Mail::to('test@example.com')->send(new TestMail);
    return 'メール送信完了';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webapp', 'WebappController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


