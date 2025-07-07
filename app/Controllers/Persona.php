<?php
namespace App\Controllers;

use App\Models\PersonaModel;

class Persona extends BaseController
{
    /*
    public function index()
    {
        // Verifica si el usuario está autenticado
        if (!session()->has('usuario')) {
            return redirect()->to(base_url('/login'));
        }

        // Cargar la vista de estudiante
        return view('paginas/Estudiante', [
            'usuario' => session('Persona') // Asumiendo que 'Persona' contiene el nombre del usuario
        ]);
    }
         */

    public function estudiante(): string
    {
        // Verifica si el usuario es un estudiante
        // if (!session()->has('Persona') || session('estudiante') != 2) {
        //     redirect()->to('/login')->send();
        //     exit;
        // }

        // Cargar la vista de estudiante
        return view('paginas/Estudiante');
    }       


}
// This controller handles the student persona view.