<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Category;
use app\Seller;
use app\Transaction;

class Product extends Model
{
	const AVAILABLE_PRODUCT = 'available';
	const UNAVAILABLE_PRODUCT = 'unavailable';

    protected $fillabe = [
    	'name',
    	'description',
    	'quantity',
    	'status',
    	'image',
    	'seller_id'
    ];

    public function isAvailable() {
    	return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function seller(){
    	return $this->belongsTo(Seller::class);
    }

    public function transactions(){
    	return $this->hasMany(Transaction::class);
    }


    public function Categories(){
    	return $this->belongsToMany(Category::class);
    }
}
