<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafariPrice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'destination',
        'amount',
    ];

}
