<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'description', 'price', 'quantity', 'end_Date', 'product_image'];
}
