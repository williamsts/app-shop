<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // $category->products

    // hasMany = tiene_muchos
    public function products()
   	{
   		return $this->hasMany(Product::class);
   	}
}
