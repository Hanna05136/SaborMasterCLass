<?php

namespace App\Controllers;
use App\Models\PersonaModel;

use Faker\Provider\ar_EG\Person;

class Login extends BaseController
{
    public function index(): string
    {
        return view('paginas/login', ['sinNavbar' => true]);
    }
    public function acceder()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $model = new PersonaModel();
        $datosUsuario = $model->verificarUsuario($usuario, $password);
        if ($datosUsuario) {
            //GUADAR DATOS DE SESIÓN
            session()->set('usuario', $datosUsuario['Email_Persona']);
            session()->set('perfil', $datosUsuario['idRol']);

            //REDIRECCION A LAS PAGINAS POR PERFIL
            switch ($datosUsuario['idRol']) {
                case 1:
                    return redirect()->to('/administrador'); // se redirecciona a la ruta: /personas
                case 2:
                    return redirect()->to('/Estudiante');
                case 3:
                    return redirect()->to('/vendedor');
                default:
                    return redirect()->to('login');
            }
        } else {
            return redirect()->back()->with('mensaje', 'Usuario o Contraseña incorrecta');
        }
    }

    public function salir()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
