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
    $user->email = $request->input('email');
    $user->name = $request->input('name');
    $user->lastname = $request->input('lastname');
    $user->telephone = $request->input('telephone');
    $user->address = $request->input('address');
    $user->country = $request->input('country');

  	$user->save();

    return redirect('profile');
  }
}
