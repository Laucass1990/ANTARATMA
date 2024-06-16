<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChineseHoroscope;
use App\Models\ZodiacHoroscope;
use App\Models\NumerologyPrediction;

class HoroscopeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Obtener horóscopo chino basado en el año de nacimiento
        $birthYear = date('Y', strtotime($user->birthdate));
        $chineseYear = ($birthYear - 4) % 12;
        $chineseHoroscope = ChineseHoroscope::where('year', $chineseYear)->first();

        // Obtener horóscopo zodiacal basado en la fecha de nacimiento
        $month = date('m', strtotime($user->birthdate));
        $day = date('d', strtotime($user->birthdate));
        $zodiacSign = $this->getZodiacSign($month, $day);
        $zodiacHoroscope = ZodiacHoroscope::where('sign', $zodiacSign)->first();

        // Calcular número de la vida para numerología
        $lifePathNumber = $this->calculateLifePathNumber($user->birthdate);

        // Descripciones de los números del camino de vida
        $lifePathDescriptions = [
            1 => 'El número 1 es independiente y ambicioso, con una fuerte determinación para liderar.',
            2 => 'El número 2 es diplomático y cooperativo, con una habilidad natural para trabajar en equipo.',
            3 => 'El número 3 es creativo y expresivo, con un talento para la comunicación.',
            4 => 'El número 4 es práctico y trabajador, con una gran capacidad para la organización.',
            5 => 'El número 5 es aventurero y libre, siempre buscando nuevas experiencias.',
            6 => 'El número 6 es responsable y cuidadoso, con un fuerte sentido del deber hacia los demás.',
            7 => 'El número 7 es introspectivo y analítico, con una inclinación hacia la espiritualidad.',
            8 => 'El número 8 es poderoso y ambicioso, con una gran capacidad para el liderazgo y el éxito material.',
            9 => 'El número 9 es compasivo y humanitario, con un deseo de ayudar a los demás y hacer del mundo un lugar mejor.'
        ];

        $prediction = $lifePathDescriptions[$lifePathNumber] ?? 'Descripción no disponible para este número.';

        // Crear o actualizar la predicción de numerología
        $numerologyPrediction = NumerologyPrediction::updateOrCreate(
            ['user_id' => $user->id],
            ['life_path_number' => $lifePathNumber, 'prediction' => $prediction]
        );

        return view('my_horoscope', compact('chineseHoroscope', 'zodiacHoroscope', 'numerologyPrediction'));
    }

    private function getZodiacSign($month, $day)
    {
        $signs = [
            ['sign' => 'Capricornio', 'start' => '12-22', 'end' => '01-19'],
            ['sign' => 'Acuario', 'start' => '01-20', 'end' => '02-18'],
            ['sign' => 'Piscis', 'start' => '02-19', 'end' => '03-20'],
            ['sign' => 'Aries', 'start' => '03-21', 'end' => '04-19'],
            ['sign' => 'Tauro', 'start' => '04-20', 'end' => '05-20'],
            ['sign' => 'Géminis', 'start' => '05-21', 'end' => '06-20'],
            ['sign' => 'Cáncer', 'start' => '06-21', 'end' => '07-22'],
            ['sign' => 'Leo', 'start' => '07-23', 'end' => '08-22'],
            ['sign' => 'Virgo', 'start' => '08-23', 'end' => '09-22'],
            ['sign' => 'Libra', 'start' => '09-23', 'end' => '10-22'],
            ['sign' => 'Escorpio', 'start' => '10-23', 'end' => '11-21'],
            ['sign' => 'Sagitario', 'start' => '11-22', 'end' => '12-21'],
        ];

        $date = $month . '-' . $day;
        foreach ($signs as $sign) {
            if (($date >= $sign['start'] && $date <= $sign['end']) ||
                ($sign['start'] == '12-22' && $date >= '12-22') || ($sign['end'] == '01-19' && $date <= '01-19')) {
                return $sign['sign'];
            }
        }

        return null;
    }

    private function calculateLifePathNumber($date)
    {
        $date = str_replace('-', '', $date);
        while (strlen($date) > 1) {
            $date = array_sum(str_split($date));
        }
        return $date;
    }
}
