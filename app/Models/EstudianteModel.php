<?php

namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'idEstudiante';

    protected $allowedFields = [
        'Persona_idPersona'
    ];

    public function obtenerEstudiantesConCursoYCategoria()
    {
        return $this->db->table('estudiante e')
            ->select('e.idEstudiante, p.Nombre_Persona, ca.Nombre as Categoria, c.Nombre as Curso')
            ->join('categoria ca', 'ca.Estudiante_id_Estudiante = e.idEstudiante')
            ->join('curso c', 'c.Categoria_idCategoria = ca.idCategoria')
            ->join('persona p', 'p.idPersona = e.Persona_idPersona')
            ->get()
            ->getResult();
    }
}
