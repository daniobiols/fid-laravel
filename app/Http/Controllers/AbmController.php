<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Category;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    return view('admin/Products/abms/indexSubcategory',['subcategories'=>$subcategories]);
  }

  public function indexType()
  {
    $types = Type::whereNotNull('id')->orderBy('name')->paginate(5);
    return view('admin.Products.abms.indexType',['types'=>$types]);
  }

// Destroy
  public function destroyCategory(Category $category)
  {
    $category-> delete();
    session()-> flash('message','la categoria se eliminó con éxito');
    return redirect('/admin/category/index');
  }

  public function destroySubcategory(Subcategory $subcategory)
  {
    $subcategory-> delete();
    session()-> flash('message','la SubCategoria se eliminó con éxito');
    return redirect('/admin/subcategory/index');
  }

  public function destroytype(type $type)
  {
    $type-> delete();
    session()-> flash('message','El genero se eliminó con éxito');
    return redirect('/admin/type/index');
  }

  //Create
  public function createCategory (Request $request )
  {
    $data = Category::create($request->all());
    return redirect('/admin/category/index');
  }

  public function createSubcategory (Request $request )
  {
    $data = Subcategory::create($request->all());
    return redirect('/admin/subcategory/index');
  }
  public function createType(Request $request )
  {
    $data = Type::create($request->all());
    return redirect('/admin/type/index');
  }

  //add
  public function addCategory ()
  {
    $categories = Category::orderBy('name')->get();
    return view('admin/Products/abms/createCategory', ['categories'=>$categories]);
  }

  public function addSubcategory ()
  {
    $subcategories = Subcategory::orderBy('name')->get();
    $categories = Category::orderBy('name')->get();
    return view('admin/products/abms/createSubcategory', compact('categories','subcategories'));
  }
  public function addType ()
  {
    $type = Type::orderBy('name')->get();
    return view('admin/Products/abms/createType', ['type'=>$type]);
  }
// Edit
  public function editCategory (Category $category)
  {
    return view ('admin/Products/abms/editCategory',['category'=>$category]);
  }
  public function editSubcategory (Subcategory $subcategory)
  {
    $categories = Category::orderBy('name')->get();
    // $subcategory = Subcategory::orderby('name')->get();
    $data = [
      'categories'=>$categories,
      'subcategory'=>$subcategory
    ];
    return view('admin/Products/abms/editSubcategory',$data);
  }
  public function editType (Type $type)
  {
    return view('admin/Products/abms/editType',['type'=>$type]);
  }

// /edit
  public function updateCategory(Request $request, Category $category)
  {
    $category->update($request->all());
    session()->flash('message','La Categoria se edito con éxito');
    return redirect('admin/category/index');
  }

  public function updateSubcategory(Request $request,Subcategory $subcategory)
  {
    $subcategory->update($request->all());
    session()->flash('message','La Subcategoria se edito con éxito');
    return redirect('admin/subcategory/index');
  }
  public function updateType(Request $request,Type $type)
  {
    $type->update($request->all());
    session()->flash('message','El Genero se edito con éxito');
    return redirect('admin/type/index');
  }
}
