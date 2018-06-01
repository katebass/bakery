<?php

namespace App\Repositories;

use Auth;
use App\Item;

class ItemRepository extends Repository{
	public function create($array){

	$item = new Item;

	$item->category_id = $array['category_id'];
	$item->title = $array['title'];
	$item->description = $array['description'];
	$item->price = $array['price'];
    $item->photo = $array['photo'];

	$item->save();

	return $item;
	}
}
