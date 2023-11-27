<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $casts = [
        'product_id' => 'array',
    ];
    protected $fillable = [
        'user_id',
        'session_id',
        'billing_first_name',
        'billing_last_name',
        'billing_company_name',
        'billing_address',
        'billing_apartment',
        'billing_city',
        'billing_state',
        'billing_postcode',
        'billing_email',
        'billing_phone',
        'order_notes',
        'payment_method',
        'razorpay_payment_id',
        'order_status',
        'product_id',
        'order_id',
        'payment_status',
        'quantity',
        'subtotal',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id', 'id');
    }
}
