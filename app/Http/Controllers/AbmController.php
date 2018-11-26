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

// Destroy
  public function destroyCategory(Category $category)
  {
    $category -> delete();
    session()-> flash('message','la categoria se eliminó con éxito');
    return redirect('admin/Products/abms/indexCategory');
  }

  public function destroySubcategory(Subcategory $subcategory)
  {
    $subcategory -> delete();
    session()-> flash('message','la categoria se eliminó con éxito');
    return redirect('admin/Products/abms/indexSubcategory');
  }

  public function destroytype(type $type)
  {
    $type -> delete();
    session()-> flash('message','la categoria se eliminó con éxito');
    return redirect('admin/Products/abms/indexSubcategory');
  }

//Create
public function createCategory (Request $request )
{
  $data = Category::create($request->all());
  return redirect('admin/Products/abms/indexCategory');
}

public function createSubcategory (Request $request )
{
  $data = Subcategory::create($request->all());
  return redirect('admin/Products/abms/indexSubcategory');
}
public function createType(Request $request )
{
  $data = Type::create($request->all());
  return redirect('admin/Products/abms/indexType');
}

//add
// $subcategories = Subcategory :: orderby('name')->get();
// $types = Type:: orderBy('name')->get();

public function addCategory ()
{
  $categories = Category::orderBy('name')->get();
  return view('admin/Products/abms/createCategory', ['categories'=>$categories]);
}

public function addSubcategory ()
{
  $subcategories = Subcategory::orderBy('name')->get();
  return view('admin/Products/abms/createSubcategory', ['subcategories'=>$subcategories]);
}
public function addType ()
{
  $type = Type::orderBy('name')->get();
  return view('admin/Products/abms/createType', ['type'=>$type]);
}

}
