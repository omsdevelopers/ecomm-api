<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'description', 'category_id', 'brand_id', 'image', 'size',
    ];

     // Define the relationship with the Category model
     public function category()
     {
         return $this->belongsTo(CategoryModel::class, 'category_id');
     }
 
     // Define the relationship with the Brand model
     public function brand()
     {
         return $this->belongsTo(BrandModel::class, 'brand_id');
     }

     public function carts()
    {
        return $this->hasMany(CartModel::class, 'product_id');
    }
}
