<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Repositories\ItemRepository;

class ItemsController extends Controller
{
	protected $item;

	public function __construct(Item $item){
		$this->item = new ItemRepository($item);
	}


	public function newSolution($categoryid){
		return view('items.new', compact('categoryid'));
	}

	public function create(Request $request){
		if($request->photo){
			$ary = $request->only(['title', 'description', 'price', 'photo']);
		} else{
			$ary = $request->only(['title', 'price', 'description']);
		}
		$ary['category_id']  = $request->id;

		$item = $this->item->create( $ary );


		return redirect()->home();
	}
}
