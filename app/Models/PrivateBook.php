<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateBook extends Model
{
    use HasFactory;

    protected $table = 'private_books';
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

    public function price_row()
    {
        return $this->hasOne(PrivatePrice::class, 'id', 'private_price');
    }
}
