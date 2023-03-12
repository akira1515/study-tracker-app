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


//学習コンテンツ・学習言語管理
Route::get('/admin/index', 'AdminController@admin')->name('admin');

//学習コンテンツ追加
Route::get('/admin/content/add/index', function(){return view('/admin/content/add/index');});
Route::post('/admin/content/add/index', 'AdminController@contentsAdd')->name('contentsAdd');
//学習コンテンツ名変更・削除
Route::get('/admin/content/index/{id}', 'AdminController@contentsUpdateView')->name('contentsUpdateView');
Route::post('/admin/content/index/{id}/update', 'AdminController@contentsUpdate')->name('contentsUpdate');
Route::delete('/admin/content/index/{id}/delete', 'AdminController@contentsDelete')->name('contentsDelete');

//学習言語追加
Route::get('/admin/lang/add/index', function(){return view('/admin/lang/add/index');});
Route::post('/admin/lang/add/index', 'AdminController@langsAdd')->name('langsAdd');
//学習言語名変更
Route::get('/admin/lang/index/{id}', 'AdminController@langsUpdateView')->name('langsUpdateView');
Route::post('/admin/lang/index/{id}/update', 'AdminController@langsUpdate')->name('langsUpdate');
Route::delete('/admin/lang/index/{id}/delete', 'AdminController@langsDelete')->name('langsDelete');


//ユーザー管理
Route::get('/admin/user/index', 'AdminController@user')->name('adminUser');
//ユーザー削除
Route::post('/admin/user/index/{id}', 'AdminController@userDelete')->name('adminUserDelete');
//ユーザー名、アドレス名変更
Route::get('/admin/user/edit/{id}', 'AdminController@userEdit')->name('adminUserEdit');
Route::post('/admin/user/edit/{id}', 'AdminController@userUpdate')->name('adminUserUpdate');

// Route::resource('webapp', '\App\Http\Controllers\WebappController');
Auth::routes();
Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('/webapp', 'WebappController@index')->name('webapp');
        Route::post('/webapp', 'WebappController@execStore')->name('execStore');
        // Route::get('/webapp/test', 'WebappController@test')->name("test");
        
        // Route::post('/webapp', function(Request $request){
        // });
        
    }
);
Route::get('/home', 'HomeController@index')->name('home');


