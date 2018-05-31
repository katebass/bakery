<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class OrdersController extends Controller
{

	public function addToCart(Request $request, Item $item) {
		if (session('cart')) {
			$cart = session('cart');
			$cart[] = $item; 
			session('cart', $cart);
			dd(session('cart'));
		} else{
			session('cart', [$item]);
		}

		dd(session('cart'));

		return redirect()->back();

	}
}
