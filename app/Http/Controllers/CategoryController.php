<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Category;
use App\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index () //ok
  {
      $categories = Category::whereNotNull('id')->orderBy('name')->paginate(10);
      $subcategories = Subcategory::whereNotNull('id')->orderBy('name')->paginate(10);
      $types = Type::whereNotNull('id')->orderBy('name')->paginate(10);

          $data = [
            'types' => $types,
            'categories'=> $categories,
            'subcategories' => $subcategories
          ];

    return view('admin.Products.abms.index',$data);
  }

}
