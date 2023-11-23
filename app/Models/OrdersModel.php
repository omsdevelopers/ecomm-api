<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
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
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
