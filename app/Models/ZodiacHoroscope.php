<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZodiacHoroscope extends Model
{
    use HasFactory;

    protected $fillable = [
        'sign',
        'prediction',
    ];
}

