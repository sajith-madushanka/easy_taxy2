<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinibusBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'destination',
        'seats',
        'date',
        'name',
        'phone',
        'note',
        'price'
    ];
}
