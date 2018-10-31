<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
  public function show()
  {
    $user = \Auth::user();
    return view('editprofile', ['user' => $user]);
  }

  public function update(Request $request)
  {
    $user = \Auth::user();

    $user->name = $request->input('name');
  	$user->save();

    return redirect('profile');
  }
}
