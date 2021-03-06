<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $guarded = [];
    


    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id','id');
    }
}
