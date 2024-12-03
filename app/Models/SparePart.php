<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;

    protected $table = 'spare_parts';


    protected $fillable = [
        'name',
        'car_model',
        'product_code',
        'price',
        'image'
    ];
}
