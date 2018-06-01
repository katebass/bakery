<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class OrdersController extends Controller
{

	public function addToCart(Request $request, Item $item) {
		if ($request->session()->has('cart')) {
			$request->session()->push('cart', $item);
		} else{
			$request->session()->put('cart', [$item]);
		}
		$request->session()->save();

		return redirect()->back();
	}

	public function clearCart(Request $request){
		$request->session()->flush();

		return redirect()->back();
	}

	public function deleteFromCart(Request $request, Item $item){
		$cart = $request->session()->get('cart');
		$index = false;

		for($i = 0; $i < count($cart); $i++){
			if($cart[$i]->id == $item->id){
				$index = $i;
				break;
			}
		}
		if($index !== false){
			unset($cart[$index]);
			$cart = array_values($cart);
		}

		$request->session()->put('cart', $cart);

		return redirect()->back();
	}
}
