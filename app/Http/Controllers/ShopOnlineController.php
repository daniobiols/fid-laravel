<?php

namespace App\Http\Controllers;
use App\Image;
use App\Product;
use App\SubCategory;
use App\Type;
use App\Category;
use Illuminate\Http\Request;



class ShopOnlineController extends Controller
{
	public function show(Request $req)
  	{
  		$types=Type::all();
		$categories=Category::all();
		$subcategories=SubCategory::all();
		$products=Product::whereNotNull('id');
		
		if( isset($_GET['type']))
		{
			$products = $products->where('type_id', $_GET['type']);
		}

		if( isset($_GET['categories']))
		{
			$products = $products->where('category_id', $_GET['categories']);
			$subcategories = $subcategories->where('category_id', $_GET['categories']);
		}

		if( isset($_GET['subcategories']))
		{
			$products = $products->where('subcategory_id', $_GET['subcategories']);
		}

		$products = $products->paginate(5);

		return view('products.shopOnline',compact(['products', 'types', 'categories', 'subcategories']) );
  	}

  	public function prodView(Product $product)
  	{
	    return view('products/productView', ['product'=>$product]);
  	}

}
