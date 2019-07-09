<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'category_name', 'category_description'
    ];
   public function products(){
              return $this->hasMany(Product::class);
   }
}
