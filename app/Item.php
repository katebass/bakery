<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = [
		'title', 'description', 'price', 'photo',
	];

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function orders(){
    	return $this->belongsToMany(Order::class);
    }
}
