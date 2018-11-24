<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Subcategory;
use App\Category;
use App\Type;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

  public function index () //ok
  {
      $products = Product::whereNotNull('id')
      ->orderBy('name')
      ->paginate(5);
    return view('admin.Products.index',['products'=>$products]);
  }

  public function show(Product $product)
  {
    return view('admin.products.show',['product'=> $product]);
  }

  public function destroy(Product $product)
  {
    $product -> delete();
    session()-> flash('message','el producto se eliminó con éxito');
    return redirect('admin/products/index');
  }

  public function edit (Product $product)
  {
    $categories = Category::orderBy('name')->get();
    $subcategories = Subcategory :: orderby('name')->get();
    $types = Type:: orderBy('name')->get();

    $data = [
      'product' => $product,
      'categories'=> $categories,
      'subcategories' => $subcategories,
      'types' => $types
    ];
    return view('admin.products.edit',$data);
  }

  public function update(ProductRequest $request, Product $product)
  {
    $product->update($request->all());

    $this->addImages($product);

    session()->flash('message','El producto se edito con éxito');

    return redirect('admin/products/index');
  }

  public function addImages($product)
  {
    if (request()->hasFile('images')) {
      foreach (request()->file('images') as $file) {
        $src= $file->store('products');
        Image::create([
          'src' => $src,
          'product_id'=> $product->id
        ]);
      }
    }
  }

  public function add ()
  {

    $categories = Category::orderBy('name')->get();
    $subcategories = Subcategory :: orderby('name')->get();
    $types = Type:: orderBy('name')->get();

    return view('admin/products/create', compact('categories','subcategories','types'));
  }

  public function create (Request $request )
  {
    // dd($request->all());
    $data = Product::create($request->all());
    $this->addImages($data);

    return redirect('admin/products/index');
  }


}
