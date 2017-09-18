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
    return redirect('/admin');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'admin_guest'], function() {
        Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm');
        Route::post('register', 'AdminAuth\RegisterController@register');
        Route::get('login', 'AdminAuth\LoginController@showLoginForm');
        Route::post('login', 'AdminAuth\LoginController@login');
    });

    Route::group(['middleware' => 'admin_auth'], function(){
        Route::post('logout', 'AdminAuth\LoginController@logout')->name('logout');
        Route::get('/', function(){
          return view('home');
        });
        
    });
});