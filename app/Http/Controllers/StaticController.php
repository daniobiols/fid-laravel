<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
	  public function login()
	  {
	      return view('login');
    }
}
