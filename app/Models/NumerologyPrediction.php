<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumerologyPrediction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'life_path_number',
        'prediction',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


