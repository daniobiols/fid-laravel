<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
  public function show()
  {
    $user = \Auth::user();
    return view('profile', ['user' => $user]);
  }

  public function destroy(User $user)
  {
    $user -> delete();
    session()-> flash('message','Tu cuenta se elimino con exito');
    return redirect('/');
  }
}
