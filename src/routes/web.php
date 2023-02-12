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
use Illuminate\Http\Request;
use App\Http\Controllers\WebappController;

Route::get('/testmail', function(){
    Mail::to('test@example.com')->send(new TestMail);
    return 'メール送信完了';
});

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('webapp', '\App\Http\Controllers\WebappController');
Route::group(
    ['middleware' => 'auth'],
    function () {
        Auth::routes();
        Route::get('/webapp/index', 'WebappController@index')->name('webapp');
        Route::post('/webapp/index', 'WebappController@execStore')->name('execStore');
        Route::get('/webapp/test', 'WebappController@test')->name("test");
        
        // Route::post('/webapp', function(Request $request){
        // });
        

        
        

        
        

    }
);
Route::get('/home', 'HomeController@index')->name('home');


