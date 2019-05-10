<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Buyer;
use app\Product;

class Transaction extends Model
{
    public $fillable = [
    	'quantity',
    	'buyer_id',
    	'product_id'
    ];

    public function buyer(){
    	return $this->belongsTo(Buyer::class);
    }

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
