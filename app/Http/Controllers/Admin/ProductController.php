<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $products=
    Product::orderBy('type_id')->paginate(5);

    return view('Admin.Products.index',['products'=>$products]);
  }

  public function showCategories(Category $category)
  {
    return  view('Admin.Products.showCategories',['category'=>$category]);
  }

}
