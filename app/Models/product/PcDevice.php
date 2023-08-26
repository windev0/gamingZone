<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcDevice extends Model
{
    use HasFactory;
    protected $table = 'pc_devices';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'quantity',
        'popular',
        'date'
    ];
}
