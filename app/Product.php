<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // $product->category

    // belongsTo = pertenece_a
    public function category()
   	{
   		return $this->belongsTo(Category::class);
   	}


   	// $product->images
   	public function images()
   	{
   		return $this->hasMany(ProductImaage::class);
   	}
}
