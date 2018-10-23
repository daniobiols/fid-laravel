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
Route::get('/home', 'HomeController@index')->name('home');


// Rutas Productos
Route::get('Admin/Products/Category', 'Admin\ProductController@showCategories');
Route::get('Admin/Products', 'Admin\ProductController@index');
// Route::get('products.product', 'ProductController@index');
// Route::get('products.product', 'ProductController@index');
// Route::get('products.product', 'ProductController@index');
// Route::get('products.product', 'ProductController@index');
// Route::get('products.product', 'ProductController@index');
