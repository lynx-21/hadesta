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

Route::get('/', 'HadestaController@homepage_v');

Route::get('/register', 'Auth\\AuthController@register_v')->name('app.register_v');
Route::post('/register', 'Auth\\AuthController@register_p')->name('app.register_p');

Route::post('/login', 'Auth\\AuthController@login_p')->name('app.login_p');
Route::get('/logout', 'Auth\\AuthController@logout_p')->name('app.logout_p');

Route::get('/user', function(){
    return view('pages.app.user.dev');
});
