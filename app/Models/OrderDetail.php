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
        'cur_pr_name',
        'quantity',
        'cur_pr_price',
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
