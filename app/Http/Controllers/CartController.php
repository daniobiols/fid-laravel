<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class CartController extends Controller
{
    public function __construct()
    {
    	//Si no existe variable carrito, la creo y le guardo un array vacio
    	if(!\Session::has('cart')) \Session::put('cart', array());
    }

    public function show()
    {
    	$cart = \Session::get('cart');
    	return view('cart.show',['cart'=> $cart]);
    }

    public function add ($id)
    {
    	$prod = Product::find($id);
     	//guardo la variable de sesion y la guardo en una variable local
    	$cart = \Session::get('cart');
    	//agrefo propiedad de cantidad y por primera vez la cantidad va a ser uno
    	$prod->quantity = 1;
    	// dd($prod);
    	//ubico el item en el array en base al slug
    	$cart[$prod->id] = $prod;
    	// dd($cart);
    	//actualizo variable de sesion
    	\Session::put('cart', $cart);
    	return redirect()->route('home');
    }	

    public function destroy($id)
 	{
    	$cart = \Session::get('cart');
    	unset($cart[$id]);
    	\Session::put('cart', $cart);

    	return redirect()->route('home');

  	}
}
