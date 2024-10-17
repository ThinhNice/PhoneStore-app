<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'order_id',
        'total_order',
    ];

    public function order() 
    {
        return $this->belongsTo(Order::class);
    }
}
