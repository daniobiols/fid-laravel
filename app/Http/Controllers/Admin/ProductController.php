<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
// use App\Http\Requests\ProductRequest;
use App\Image;
use App\Product;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
  public function index()
  {
    $products=
    Product::orderBy('name')->paginate(5);

    return view('admin.products.index',['products'=>$products]);
  }

  public function show(Product $product)
  {
    return view('admin.products.show',['product'=> $product]);
  }

public function edit (Product $product)
{
  $categories = Category::orderBy('name')->get();
  $subcategories = SubCategory :: orderby('name')->get();
  $types = Type:: orderBy('name')->get();

  $data = [
    'product' => $product,
    'categories'=> $categories,
    'subcategories' => $subcategories,
    'types' => $types
  ];
  return view('admin.products.edit',$data);
}

public function destroy(Product $product)
{
  $product -> delete();
  session()-> flash('messge','el producto se elimino con exito');
  return redirect('admin/products')  ;
}

private function addImages($product)
{
  if (request()->hasfile('images')) {
    foreach (request()->file('iamges') as $file) {
      $src = $file ->store('products');
      Image::create([
        'src'=>$src,
        'product_id' => $product->id
      ]);
    }
  }
}

// public function edit(Product $product)
// {
//
// }
  public function showCategories(Category $category)
  {
    return  view('Admin.Products.showCategories',['category'=>$category]);
  }

}
