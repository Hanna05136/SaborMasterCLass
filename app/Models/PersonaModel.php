<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonaModel extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'idPersona';
    protected $allowedFields =
    ['No_Documento', 'Tipo_Documento', 'Genero', 'Nombre_Persona', 'Email_Persona', 'Direccion_Persona', 'Telefono_Persona', 'idRol'];

    public function verificarUsuario($usuario, $password)
    {
        return $this
            ->where('Email_Persona', trim($usuario))
            ->where('Contraseña', trim($password))
            ->first();
    }
}
