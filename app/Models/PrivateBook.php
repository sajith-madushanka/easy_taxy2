<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'private_price',
        'return_trip',
        'date',
        'time',
        'name',
        'phone',
        'note',
        'price'
    ];
}
