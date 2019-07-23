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
Route::get('/xinchao','Controller@xinchao')->name('example.xinchao');
Route::get('/gioithieubanthan','Controller@duongkhang')->name('example.duongkhang');
Route::get('/hoctap/php','Controller@hoctap')->name('example.hoctap');
Route::get('/hoctap/laravel','Controller@laravel')->name('example.laravel');
Route::get('/ngayhomnay','Controller@ngayhomnay')->name('example.ngayhomnay');