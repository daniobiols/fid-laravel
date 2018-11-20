<?php

namespace App\Http\Controllers;
use App\Image;
use App\Product;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;



class ShopOnlineController extends Controller
{
	public function show()
  	{
  		$products=Product::whereNotNull('id')
  			->orderBy('name')
			->paginate(5)
		;
	    return view('products.shopOnline', ['products'=>$products]);
  	}

  	public function prodView(Product $product)
  	{
  		// dd($product);
	    return view('products/productView', ['product'=>$product]);
  	}


}
