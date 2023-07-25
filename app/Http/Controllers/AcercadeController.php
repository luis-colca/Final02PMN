<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
    {
        $apellidosNombres = 'Colca Colca Luis F'; // Reemplaza con tus apellidos y nombres
        $carreraProfesional = 'DSI'; // Reemplaza con tu carrera profesional
        $nivelCiclo = 'IV Semestre'; // Reemplaza con tu nivel/ciclo de estudios
        $turno = 'Noche'; // Reemplaza con tu turno

        return view('acercade', compact('apellidosNombres', 'carreraProfesional', 'nivelCiclo', 'turno'));
    }
}
