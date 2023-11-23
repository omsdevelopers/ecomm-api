<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'name', 'price', 'size', 'quantity', 'user_id', 'product_id', 'session_id', 'total',
    ];


    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
