<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		'customer_name', 'customer_email', 'customer_phone',
	];

    public function items(){
    	return $this->belongsToMany(Item::class)->withPivot('quantity');
    }

}
