<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'stock',
        'is_hot',
        'is_new',
    ];

    public function productImages() 
    {
        return $this->hasMany(ProductImage::class);
    }

    public function statistics() 
    {
        return $this->hasMany(Statistic::class);
    }

    public function categories() 
    {
        return $this->belongsTo(Category::class);
    }
}
