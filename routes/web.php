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

Route::get('/addArticle', 'ArticlesController@showForm');

Route::post('/storeArticle', 'ArticlesController@store')->name('storeArticle');

Route::get('/articles','ArticlesController@index')->name('articles');



Route::get('/articles/{idArticle}','ArticlesController@show')->name('detailArticle');

