<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImageOrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_image_id',
        'order_detail_id',
    ];

    public function productImage()
    {
        return $this->belongsTo(ProductImage::class);
    }

    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
