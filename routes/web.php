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

Route::get('/admin_step', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/books', 'BooksController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function(){
        Route::get('/list-books', 'BooksController@index')->name('list-books');
        Route::post('list-books', 'BooksController@store');
        Route::delete('/list-books/{book}', 'BooksController@destroy');
        Route::get('/list-books/{book}', 'BooksController@show');
        Route::get('/list-books/{book}/edit-books', 'BooksController@edit');
        Route::put('/list-books/{book}', 'BooksController@update');

        Route::get('/list-authors', 'AuthorsController@index')->name('list-authors');
        Route::post('/list-authors', 'AuthorsController@store');
        Route::delete('/list-authors/{author}', 'AuthorsController@destroy');
        Route::get('/list-authors/{author}', 'AuthorsController@show');
        Route::get('/list-authors/{author}/edit-authors', 'AuthorsController@edit');
        Route::put('/list-authors/{author}', 'AuthorsController@update');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
