<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Category;
use App\Type;
use Illuminate\Http\Request;

class AbmController extends Controller
{

  // indexs
  public function indexCategory() //ok
  {
      $categories = Category::whereNotNull('id')->orderBy('name')->paginate(5);

      return view('admin/Products/abms/indexCategory',['categories'=>$categories]);
  }

  public function indexSubcategory()
  {
    $subcategories = Subcategory::whereNotNull('id')->orderBy('name')->paginate(30);
    return view('admin.Products.abms.indexSubcategory',['subcategories'=>$subcategories]);
  }

  public function indexType()
  {
    $types = Type::whereNotNull('id')->orderBy('name')->paginate(5);
    return view('admin.Products.abms.indexType',['types'=>$types]);
  }

  public function destroyCategory(Category $category)
  {
    $category -> delete();
    session()-> flash('message','el producto se eliminó con éxito');
    return redirect('admin/products/index');
  }

}
