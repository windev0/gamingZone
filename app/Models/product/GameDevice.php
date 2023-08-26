<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameDevice extends Model
{
    use HasFactory;
    protected $table = 'game_devices';
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
