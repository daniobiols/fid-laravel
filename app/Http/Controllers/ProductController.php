<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

  public function index ()
  {
      $products = Product::whereNotNull('id')
      ->orderBy('name')
      ->paginate(3)
    ;
    return view('admin.Products.index',['products'=>$products]);

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

  // private function addImages($product)
  // {
  //   if (request()->hasfile('images')) {
  //     foreach (request()->file('iamges') as $file) {
  //       $src = $file ->store('products');
  //       Image::create([
  //         'src'=>$src,
  //         'product_id' => $product->id;
  //       ]);
  //     }
  //   }
  // }

  // public function edit(Product $product)
  // {
  //
  // }
    public function showCategories(Category $category)
    {
      return  view('Admin.Products.showCategories',['category'=>$category]);
    }

}
