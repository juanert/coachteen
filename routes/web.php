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

//VIEWS
Route::view('/', 'welcome')->name('home');
Route::view('/about-us', 'templates/about-us')->name('about-us');

//GET CONTROLLERS
Route::get('login', 'AuthController@index')->name('login');
Route::get('register', 'AuthController@register')->name('sign-up');
Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');


//POST CONTROLLERS
Route::post('post-login', 'AuthController@postLogin');
Route::post('post-register', 'AuthController@postRegister');  
