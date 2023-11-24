<?php


namespace App\Enums;

class OrderStatus
{
    const PENDING = 'pending';
    const PROCESSING = 'processing';
    
    const SHIPPED = 'shipped';
    const COMPLETED = 'completed';
    const CANCELLED = 'cancelled';
}