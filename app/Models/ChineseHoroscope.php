<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChineseHoroscope extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'animal',
        'prediction',
    ];
}

