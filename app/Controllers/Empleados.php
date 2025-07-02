<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;
use CodeIgniter\Controller;
class Empleados extends Controller
{
    protected $empleadoModel;


    public function index()
    {
        // Verifica si el usuario está autenticado
        if (!session()->has('usuario')) {
            return redirect()->to(base_url('login'));
        }

        $data['empleados'] = $this->empleadoModel->findAll();
        return view('empleados/index', $data);
    }

    public function estudiante()
    {
        if (!session()->has('usuario') || session('perfil')!=2)
        {
            return redirect()->to ('/login');

        }
        return view('paginas/Estudiante');
    }


  
}
?>