<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('questions', 'QuestionsController')->except('show');
Route::get('/questions/{slug}', 'QuestionsController@show')->name('questions.show');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('usermanagement.user.index');
});

Route::get('/user-create', function () {
    return view('usermanagement.user.create');
});


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
