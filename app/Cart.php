<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['productid', 'userid', 'quantity', 'cart_total'];
}
