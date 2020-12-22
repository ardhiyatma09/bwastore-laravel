<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->hasOne(Product::class, 'id','products_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}
