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



// section productos

// Route::get('admin.products','Admin\ProductController@index');

Route::get('admin/products','Admin\ProductController@showCategories');
Route::get('admin.products/{product}','ProductController@show');
Route::get('admin/products/{id}/edit','ProductController@edit');
Route::get('admin.products/{product}','ProductController@update');
Route::put('admin/products/{id}/edit','ProductController@save');
Route::get('admin/products/create','ProductController@add');
Route::post('admin/products/create','ProductController@create');
Route::delete('admin/products/{id}','ProductController@destroy');
//TEST
Route::get('/queries/product', function () {
	$product = \App\Product::find(1);
	$cat = $product->category()->orderBy('name')->get();
	// $actors = $movie->actors()
	// 	->where('favorite_movie_id', 6)
	// 	->orderBy('first_name')
	// 	->get()
	// ;
	dd($cat->toArray());
});
Route::get('/queries/categories',function(){
  $categorie = \App\Category::get();
  // $cat = $categorie->orderBy('name')->get();
  dd($categorie->toArray());
});
Route::get('admin/products/index','ProductController@index');

Route::get('admin/products/show','ProductController@show');

Route::get('admin', 'AdminController@index')->middleware('auth');

Route::get('admin', 'AdminController@index')->middleware('isAdmin');

Route::get('profile', 'ProfileController@show')->middleware('auth');

Route::get('editprofile', 'EditProfileController@show')->middleware('auth');

Route::post('editprofile', 'EditProfileController@update')->middleware('auth')->name('updateProfile');
/* -----------------------------------------INICIO LLAMADA AJAX/*/

// Route::post('pruebaApi', function(Request $req){
// 	return $req->input('datos');
// 	// return $data;
// });

// Route::post('pruebaApi', 'Auth\RegisterController@createAjax');

/* --------------------------------------------FIN LLAMADA AJAX/*/

Route::get('shopOnline', 'ShopOnlineController@show');

Route::get('products/productView/{product}', 'ShopOnlineController@prodView');

Route::get('products/{product}/edit', 'ShopOnlineController@edit');





