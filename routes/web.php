<?php

use Illuminate\Support\Facades\Auth;
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

/**
 * Login routes
 */
Auth::routes();

/**
 * Client-facing Routes
 */
Route::view('/', 'index');
Route::view('/admin_step', 'welcome');
Route::view('/about', 'about');
Route::view('/faq', 'faq');
Route::get('/books', 'BooksController@index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin-facing Routes
 */
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => '/admin'], function () {
    Route::group(['prefix' => '/books'], function () {
        Route::get('/', 'BooksController@index')->name('books.index');
        Route::post('/', 'BooksController@store')->name('books.create');
        Route::delete('/{book}', 'BooksController@destroy')->name('books.delete');
        Route::get('/{book}', 'BooksController@show')->name('books.show');
        Route::get('/{book}/edit', 'BooksController@edit')->name('books.edit');
        Route::put('/{book}', 'BooksController@update')->name('books.update');
    });

    Route::group(['prefix' => '/authors'], function () {
        Route::get('/', 'AuthorsController@index')->name('authors.index');
        Route::post('/', 'AuthorsController@store')->name('authors.create');
        Route::delete('/{author}', 'AuthorsController@destroy')->name('authors.delete');
        Route::get('/{author}', 'AuthorsController@show')->name('authors.show');
        Route::get('/{author}/edit', 'AuthorsController@edit')->name('authors.edit');
        Route::put('/{author}', 'AuthorsController@update')->name('authors.update');
    });
});