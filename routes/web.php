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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('sections', 'App\Http\Controllers\SectionController');
Route::resource('functional_class', 'App\Http\Controllers\FunctionalClassController');

Route::resource('courses', 'App\Http\Controllers\CoursesController');

Route::resource('recipient', 'App\Http\Controllers\RecipientController');

Route::get('profile', 'App\Http\Controllers\UserController@profile')->name('profile');
Route::put('profile/edit/{id}', 'App\Http\Controllers\UserController@profile_edit')->name('profile.edit');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
