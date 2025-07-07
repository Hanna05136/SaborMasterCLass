<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstudianteModel;

class Estudiante extends BaseController
{

    public function estudiante()
    {
        /*if (!session()->has('Persona') || session('estudiante')!=2)
        {
            return redirect()->to ('/login');

        }*/
        return view('paginas/Estudiante');
    }

    public function index()
    {
        $modelo = new EstudianteModel();
        $datos['estudiantes'] = $modelo->obtenerEstudiantesConCursoYCategoria();

        return view('paginas/MisCursos', $datos);
    }

    public function eliminar($id)
    {
        $model = new EstudianteModel();
        $model->delete($id);
        return redirect()->to('/estudiantes');
    }
}
