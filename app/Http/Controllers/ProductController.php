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

  public function edit ($id)
  {
    // $categories = Category::orderBy('name')->get();
    // $subcategories = SubCategory :: orderby('name')->get();
    // $types = Type:: orderBy('name')->get();

    // $data = [
    //   'product' => $product,
    //   'categories'=> $categories,
    //   'subcategories' => $subcategories,
    //   'types' => $types
    // ];

    $product = Product::find($id);
    return view('admin.products.edit',['product'=> $product]);
  }

  public function destroy(Request $request, $id)
  {
    $data = Product::find($id);
    $data -> delete();
    session()-> flash('messge','el producto se elimino con exito');
    return redirect('admin/products/index');
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

  public function save (Request $request, $id)
  {
    $data = Product::find($id);

    $data->fill([
      'name' => $request->input('name'),
      'description'=> $request->input('description'),
      'product_code' => $request->input('product_code'),
      'price' => $request->input('price'),
    ]);

    $data->save();

    return redirect('admin/products/index');
  }

  public function add ()
  {
    return view('admin/products/create');
  }

  public function create (Request $request)
  {
    $data = new Product;

    $data->fill([
      'name' => $request->input('name'),
      'description'=> $request->input('description'),
      'product_code' => $request->input('product_code'),
      'price' => $request->input('price'),
      'product_type' => $request->input('produtc_type'),
    ]);

    $data->save();

    return redirect('admin/products/index');
  }



}
