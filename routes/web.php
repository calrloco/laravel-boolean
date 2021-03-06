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

Route::get('/','StaticPageController@home')->name('StaticPage.home');
Route::get('/chisiamo','StaticPageController@chiSiamo')->name('StaticPage.chisiamo');
Route::get('/studenti','StudentController@studenti')->name('Student.studenti');
Route::get('/studente/{id}','StudentController@showStudent')->name('Student.studente');
