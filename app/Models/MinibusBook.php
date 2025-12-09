<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinibusBook extends Model
{
    use HasFactory;
    protected $table = 'minibus_books';
    protected $fillable = [
        'destination',
        'seats',
        'date',
        'name',
        'phone',
        'note',
        'price'
    ];

    public function price_row()
    {
        return $this->hasOne(MinibusPrice::class, 'id', 'destination');
    }
}
