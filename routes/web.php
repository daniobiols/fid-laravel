<?php

use Illuminate\Http\Request;

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

Route::get('admin', 'AdminController@index')->middleware('auth');

Route::get('admin', 'AdminController@index')->middleware('isAdmin');

Route::get('profile', 'ProfileController@show')->middleware('auth');

Route::get('editprofile', 'EditProfileController@show')->middleware('auth');

Route::post('editprofile', 'EditProfileController@update')->middleware('auth')->name('updateProfile');

// section productos Admin

Route::get('admin/products/index','ProductController@index');

Route::delete('admin/products/{product}','ProductController@destroy');

Route::get('admin/products/{product}/edit','ProductController@edit');

Route::put('admin/products/{product}','ProductController@update');

// Route::put('admin/products/{id}/edit','ProductController@save');

Route::get('admin/products/create','ProductController@add');

Route::post('admin/products/create','ProductController@create');

Route::get('admin/products/show','ProductController@show');

// section productos shop online

Route::get('shopOnline', 'ShopOnlineController@show');

Route::get('products/productView/{product}', 'ShopOnlineController@prodView');

Route::get('products/{product}/edit', 'ShopOnlineController@edit');

// section carrito

Route::get('cart/show', 'CartController@show');

Route::get('cart/add/{product_id}', 'CartController@add');

Route::delete('cart/delete/{id}','CartController@destroy');

//section purchase

Route::get('purchase/index', 'PurchaseController@index');

Route::get('purchase/add/{list}', 'PurchaseController@add');

/* -----------------------------------------INICIO LLAMADA AJAX/*/

// Route::post('pruebaApi', function(Request $req){
// 	return $req->input('datos');
// 	// return $data;
// });

// Route::post('pruebaApi', 'Auth\RegisterController@createAjax');

/* --------------------------------------------FIN LLAMADA AJAX/*/
