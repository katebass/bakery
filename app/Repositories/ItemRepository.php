<?php

namespace App\Repositories;

use Auth;
use App\Item;

class ItemRepository extends Repository{
	public function create($array){

	$item = new Item($array);

	$item->category_id = $array['category_id'];

	$item->save();

	return $item;
	}
}
