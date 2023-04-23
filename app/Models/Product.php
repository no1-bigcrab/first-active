<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable = ['title', 'short_description', 'description', 'size', 'colors', 'quality',  'price', 'sale_price', 'category_id' ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(ProductsImages::class, 'products_id', 'id');
    }
}
