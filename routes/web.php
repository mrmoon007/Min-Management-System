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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('category.home');
});
Route::get('/show','postController@valueShow');
Route::get('/insert','postController@valueInsert');
Route::post('/submit','postController@valueSubmit');
Route::get('/allDataShow','postController@valueAllShow')->name('allDataShow');
Route::get('/edit/{id}','postController@valueEdit')->name('edit1');
Route::post('/update/{id}','postController@valueUpdate')->name('update');
Route::get('/delete/{id}','postController@valueDelete')->name('delete');
Route::get('/search','postController@valueSearch');


