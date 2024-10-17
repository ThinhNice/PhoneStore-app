<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_img',
        'product_name',
        'quantity',
        'price',
    ];

    public function productImages() 
    {
        return $this->belongsToMany(ProductImage::class);
    }
    
    public function orders() 
    {
        return $this->belongsTo(Order::class);
    }
}
