<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    public function orderDetails() 
    {
        return $this->belongsToMany(OrderDetail::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
