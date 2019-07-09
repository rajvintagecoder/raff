<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'email', 'surname', 'phone', 'password', 'address_1', 'address_2', 'city', 'zipcode'
    ];
    public function user()
    {
        return $this->hasMany(Profile::class);
    }
}
