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

Route::get('/list-transaksi', function () {
    return view('pages.list-transaksi');
})->name('page.list-transaksi');

Route::get('/list-book', function () {
    return view('pages.list-book');
})->name('page.list-book');

Route::get('/list-user', function () {
    return view('pages.list-user');
})->name('page.list-user');

Route::get('/transaksi/create', function () {
    return view('pages.create-transaksi');
})->name('page.create-transaksi');

Route::get('/create-book', function () {
    return view('pages.create-book');
})->name('page.create-book');

Route::get('/create-user', function () {
    return view('pages.create-user');
})->name('page.create-user');

Route::get('/edit-transaksi', function () {
    return view('pages.edit-transaksi');
})->name('page.edit-transaksi');

Route::get('/edit-book', function () {
    return view('pages.edit-book');
})->name('page.edit-book');

Route::get('/edit-user', function () {
    return view('pages.edit-user');
})->name('page.edit-user');