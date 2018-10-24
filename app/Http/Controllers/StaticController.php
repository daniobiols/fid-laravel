<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    class ProductController extends Controller
	{
	  public function login()
	  {
	      return view('login');
	  }
	}
}
