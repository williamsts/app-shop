<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImaage extends Model
{
    // $productImaage->product
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }  
}
