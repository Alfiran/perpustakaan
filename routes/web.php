<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
})->name('page.dashboard');

Route::get('/login','Auth\LoginController@getLogin')->name('page.login');

Route::get('/members','Pages\MemberController@index')->name('page.list-member');
Route::get('/members/create','Pages\MemberController@create')->name('page.create-member');
Route::get('/members/{id}/edit','Pages\MemberController@edit')->name('page.edit-member');

Route::get('/books','Pages\BookController@index')->name('page.list-book');
Route::get('/books/create','Pages\BookController@create')->name('page.create-book');
Route::get('/books/{id}/edit','Pages\BookController@edit')->name('page.edit-book');

Route::get('/transactions','Pages\TransactionController@index')->name('page.list-transaction');
Route::get('/transactions/create','Pages\TransactionController@create')->name('page.create-transaction');
Route::get('/transactions/{id}/edit','Pages\TransactionController@edit')->name('page.edit-transaction');

Route::get('/users','Pages\UserController@index')->name('page.list-user');
Route::get('/users/create','Pages\UserController@create')->name('page.create-user');
Route::get('/users/{id}/edit','Pages\UserController@edit')->name('page.edit-user');
