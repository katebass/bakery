<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\Admin;
use App\Notifications\OrderNotification;

class OrdersController extends Controller
{

	public function __construct(){
		$this->middleware('checkcart')->only(['create']);
	}

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

	public function create(OrderRequest $request){
		$cart = $request->session()->get('cart');

		$idsWithQuntity = array_count_values(array_column($cart, 'id'));
		$order = Order::create($request->only(['customer_name', 'customer_email', 'customer_phone']));
		foreach($idsWithQuntity as $id => $quantity){
			$order->items()->syncWithoutDetaching([$id => ['quantity' =>$quantity]]);
		}
		$request->session()->flush();
		$request->session()->save();
		
		Admin::first()->notify(new OrderNotification($order));
		return redirect()->route('home');
	}


}
