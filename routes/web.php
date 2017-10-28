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

/**** User Authentication routes******/

Route::get('login','UserController@login')->name('login');
Route::get('register','UserController@register')-> name('register');
Route::get('logout','UserController@logout')-> name('logout');
Route::post('login','UserController@authenticate')->name('auntheticate');
Route::post('register','UserController@store') ->name('store');


/**** User Authentication routes******/
Route::get('login/user','AdminController@alogin')->name('alogin');
Route::post('login/user','AdminController@authenticate')->name('auntheticate');


/****pages routes******/
//Route::get('faq','PagesController@faq')->name('faq');
//Route::contact('contact','PagesController@contact')->name('contact');
//Route::get('dashboard','PagesController@dashboard')->name('dashboard');


/****Home routes******/
Route::get('/','HomeController@index')->name('index');

// Protected routes
Route::group(['before'=> 'auth'], function(){
	Route::get('dashboard/index','HomeController@dashboard')->name('dashboard');
	Route::get('dashboard/flot','HomeController@flot')->name('flot');
  Route::get('dashboard/morris','HomeController@morris')->name('morris');
	Route::get('dashboard/index','HomeController@dashboard')->name('dashboard');
	Route::get('dashboard/forms','HomeController@forms')->name('forms');
	Route::get('dashboard/buttons','HomeController@buttons')->name('buttons');
	Route::get('dashboard/panels-wells','HomeController@panelswells')->name('panels-wells');
	Route::get('dashboard/tables','HomeController@tables')->name('dashboard');
	Route::get('dashboard/typography','HomeController@typography')->name('typography');

  Route::get('users/user-profile','UserController@profile')->name('uprofile');
  Route::post('users/user-profile','UserController@update')->name('update');


}
);

//Route::post('users/user-profile','UserController@userEdit')->name('uprofile');
