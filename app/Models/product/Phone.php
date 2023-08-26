<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phones';
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
