<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Product;

class Seller extends User
{
    public function products(){
    	return $this->hasMany(Products::class);
    }
}
