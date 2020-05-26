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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('category/{category}', 'HomeController@index')->name('category');
Route::get('package/{package}', 'HomeController@show')->name('package.show');
Route::post('package', 'HomeController@index')->name('package.search');

Route::middleware('auth')->group(function () {
    Route::resource('/home', 'HomeController')->only(['index', 'store', 'create']);
    Route::post('/home/update', 'HomeController@update')->name('home.update');
    Route::get('/home/{id}', 'HomeController@destroy')->name('home.destroy');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('profile', 'HomeController@profile')->name('profile');
});
