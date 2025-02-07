<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivatePrice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'pickup',
        'destination',
        'amount',
        'return_trip',
        'type'
    ];
}
