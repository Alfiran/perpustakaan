<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('books','BookController');
Route::resource('transactions','TransactionController');
Route::resource('users','UserController');
Route::resource('members','MemberController');
// Route::get('getList-books','BookController@getList');
Route::get('/getlist-books','Pages\BookController@getList')->name('api.getlist-books');
Route::get('/getlist-users','Pages\UserController@getList')->name('api.getlist-users');