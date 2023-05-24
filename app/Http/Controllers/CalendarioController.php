<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarioController extends Controller
{
    public function index()
    {
        // Obtener el número de semanas y días del mes actual
        $numeroSemanas = 5; // Número de semanas en el calendario
        $diasPorSemana = 7; // Número de días por semana

        // Obtener la fecha de inicio y fin del mes actual
        $inicioMes = Carbon::now()->startOfMonth();
        $finMes = Carbon::now()->endOfMonth();

        // Generar las semanas del calendario
        $semanas = [];
        $diaActual = $inicioMes;

        while ($diaActual->lte($finMes)) {
            $semana = [];

            for ($i = 0; $i < $diasPorSemana; $i++) {
                $semana[] = $diaActual->format('d');

                $diaActual->addDay();
            }

            $semanas[] = $semana;
        }
        return view('calendario', compact('semanas'));
    }
}
