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

Route::get('/quiz', 'QuizController@list')->name('quiz.list');
Route::get('/quiz/{big_question_id}', 'QuizController@detail')->name('quiz.detail');
Auth::routes();

Route::get('/createList', 'QuizController@createList')->name('quizList.create');
Route::post('/storeList', 'QuizController@storeList')->name('quizList.store');
// Route::get('/createImg', 'QuizController@createImg')->name('quizImg.create');
Route::post('/storeImg', 'QuizController@storeImg')->name('quizImg.store');
// Route::get('/createChoice', 'QuizController@createChoice')->name('quizChoice.create');
Route::post('/storeChoice1', 'QuizController@storeChoice1')->name('quizChoice1.store');
Route::post('/storeChoice2', 'QuizController@storeChoice2')->name('quizChoice2.store');
Route::post('/storeChoice3', 'QuizController@storeChoice3')->name('quizChoice3.store');
Route::post('/storeChoices', 'QuizController@storeChoices')->name('quizChoices.store');

Route::get('/edit', 'QuizController@edit')->name('quiz.edit');
Route::get('/edit/{id}', 'QuizController@editList')->name('quizList.edit');
// Route::get('/edit/{img}', 'QuizController@editImg')->name('quizImg.edit');
Route::post('/update/{id}', 'QuizController@updateList')->name('quizList.update');
Route::post('/destroy/{id}', 'QuizController@destroyList')->name('quizList.destroy');

Route::get('/home', 'HomeController@index')->name('home');
