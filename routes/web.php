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

/****Authentication routes******/

Route::get('login','uses'=>'UsersController@login', 'as'=>'login');
Route::get('register','uses'=>'UsersController@register', 'as'=>'register');
Route::get('logout','uses'=>'UsersController@logout', 'as'=>'logout');
Route::post('login','uses'=>'UsersController@aunthenticate', 'as'=>'auntheticate');
Route::post('register','uses'=>'UsersController@store', 'as'=>'store');


/****pages routes******/
Route::get('faq','uses'=>'PagesController@faq', 'as'=>'faq');
Route::contact('contact','uses'=>'PagesController@contact', 'as'=>'contact');
Route::get('dashboard','uses'=>'PagesController@dashboard', 'as'=>'dashboard');


/****Home routes******/
Route::get('home','uses'=>'HomeController@index', 'as'=>'home');






