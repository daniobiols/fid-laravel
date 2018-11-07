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
    return view('home');
});

Route::view('auth', 'auth')->middleware('auth');

Auth::routes();

Route::get('contact', 'ContactController@index');

Route::get('faq', 'faqController@index');

Route::get('shops', 'shopsController@index');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


// section productos

// Route::get('admin.products','Admin\ProductController@index');
Route::get('admin/products','Admin\ProductController@showCategories');
Route::get('admin.products/{product}','Admin\ProductController@show');
Route::get('admin.products/{product}/edit','Admin\ProductController@edit');
Route::get('admin.products/{product}','Admin\ProductController@update');
Route::put('admin.products/{product}/edit','Admin\ProductController@edit');
Route::delete('admin.products/{product}/edit','Admin\ProductController@destroy');



Route::get('profile', 'ProfileController@show')->middleware('auth');

Route::get('editprofile', 'EditProfileController@show')->middleware('auth');

Route::post('editprofile', 'EditProfileController@update')->middleware('auth')->name('updateProfile');
