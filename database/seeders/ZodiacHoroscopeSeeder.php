<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZodiacHoroscope;

class ZodiacHoroscopeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['sign' => 'Aries', 'prediction' => 'Predicción para Aries'],
            ['sign' => 'Tauro', 'prediction' => 'Predicción para Tauro'],
            ['sign' => 'Géminis', 'prediction' => 'Predicción para Géminis'],
            ['sign' => 'Cáncer', 'prediction' => 'Predicción para Cáncer'],
            ['sign' => 'Leo', 'prediction' => 'Predicción para Leo'],
            ['sign' => 'Virgo', 'prediction' => 'Predicción para Virgo'],
            ['sign' => 'Libra', 'prediction' => 'Predicción para Libra'],
            ['sign' => 'Escorpio', 'prediction' => 'Predicción para Escorpio'],
            ['sign' => 'Sagitario', 'prediction' => 'Predicción para Sagitario'],
            ['sign' => 'Capricornio', 'prediction' => 'Predicción para Capricornio'],
            ['sign' => 'Acuario', 'prediction' => 'Predicción para Acuario'],
            ['sign' => 'Piscis', 'prediction' => 'Predicción para Piscis'],
        ];

        foreach ($data as $item) {
            ZodiacHoroscope::create($item);
        }
    }
}
