<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImageOrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product-image_id',
        'order-detail_id',
    ];

    public function productImages()
    {
        return $this->belongsTo(ProductImage::class);
    }

    public function orderDetails()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
