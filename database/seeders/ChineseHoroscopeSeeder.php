<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChineseHoroscope;

class ChineseHoroscopeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['year' => 2020, 'animal' => 'Rata', 'prediction' => 'Predicción para Rata'],
            ['year' => 2021, 'animal' => 'Buey', 'prediction' => 'Predicción para Buey'],
            ['year' => 2022, 'animal' => 'Tigre', 'prediction' => 'Predicción para Tigre'],
            ['year' => 2023, 'animal' => 'Conejo', 'prediction' => 'Predicción para Conejo'],
            ['year' => 2024, 'animal' => 'Dragón', 'prediction' => 'Predicción para Dragón'],
            // Añadir más años y predicciones según sea necesario
        ];

        foreach ($data as $item) {
            ChineseHoroscope::create($item);
        }
    }
}

