<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandModel extends Model
{
    use HasFactory;

    protected $table = 'brands';
    protected $fillable = ['name', 'image', 'status', 'created_at', 'updated_at'];
    public $timestamps = false;
}
