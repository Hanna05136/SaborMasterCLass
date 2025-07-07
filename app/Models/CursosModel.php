<?php

namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'idCurso';
    protected $allowedFields =
    ['idCurso', 'Duracion', 'Numero_Curso', 'Nombre', 'Detalle', 'Costo', 'Nivel_Aprendizaje', 'Categoria_idCategoria'];
}

