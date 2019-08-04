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

Route::get('/library','BookController@checkBook');
Route::post('/add-book','BookController@addBook');
Route::get('/add-book',function (){
    return view('addBook');
});
Route::post('/delete-book','BookController@delete');
Route::post('/update','BookController@update');
Route::post('/edit-book','BookController@updateView');
Route::get('/',function(){
    return view('welcome');
});



Route::get('/vru','BookController@CheckBook');

Route::post('/asd','BookController@Delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('isAdmin');
