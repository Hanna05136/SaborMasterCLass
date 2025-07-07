<?php

namespace App\Controllers;

use App\Models\PersonaModel;
use App\Models\CursosModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Administrador extends BaseController
{
    public function index(): string
    {
        $model1 = new CursosModel();
        $model = new PersonaModel();
        
        // Obtener datos
        $data['personas'] = $model->findAll();
        $data['cursos'] = $model1->findAll(); // <- Nota: antes usabas mal el modelo
        
        // Retornar vista con ambos datos
        return view('persona/Administrador', $data);
    }

    public function crear()
    {
        return view('Persona/crear');
    }

    public function editar($documento)
    {
        $model = new PersonaModel();
        $data = $model->where('No_Documento', $documento)->first();
        return view('Persona/editar', ['personas' => $data]);
    }


    public function guardar()
    {
        $model = new PersonaModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/administrador')->with('success', 'Usuario creado correctamente');
    }

    public function actualizar($documento)
    {
        $model = new PersonaModel();
        $data = $this->request->getPost();

        // Realiza la actualización basándote en No_Documento
        $model->where('No_Documento', $documento)->set($data)->update();

        return redirect()->to('/administrador')->with('success', 'Usuario actualizado correctamente');
    }



    public function eliminar($id)
    {
        $model = new PersonaModel();
        $model->delete($id);
        return redirect()->to('/administrador');
    }

/* SECCIONDE CONTROLADOR DE CURSO */

public function crearCurso()
{
    return view('persona/CrearCurso');
}

    
public function editarCurso($id)
{
    $model = new CursosModel();
    $data = $model->where('idCurso', $id)->first();
    return view('persona/EditarCurso', ['cursos' => $data]);
}

public function actualizarCurso($id)
{
    $model = new CursosModel();
    $data = $this->request->getPost();

    $model->where('idCurso', $id)->set($data)->update();

    return redirect()->to('/administrador')->with('success', 'Curso actualizado correctamente');
}

public function eliminarCurso($id)
    {
        $model = new CursosModel();
        $model->delete($id);
        return redirect()->to('/administrador');
    }

    public function guardarCurso()
    {
        $model = new CursosModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/administrador')->with('success', 'Curso creado correctamente');
    }

public function exportarExcel()
{
    $model = new PersonaModel();
    $personas = $model->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Encabezados
    $sheet->setCellValue('A1', 'Documento');
    $sheet->setCellValue('B1', 'Tipo Documento');
    $sheet->setCellValue('C1', 'Género');
    $sheet->setCellValue('D1', 'Nombre');
    $sheet->setCellValue('E1', 'Email');
    $sheet->setCellValue('F1', 'Dirección');
    $sheet->setCellValue('G1', 'Teléfono');

    // Cuerpo del Excel
    $fila = 2;
    foreach ($personas as $per) {
        $sheet->setCellValue('A' . $fila, $per['No_Documento']);
        $sheet->setCellValue('B' . $fila, $per['Tipo_Documento']);
        $sheet->setCellValue('C' . $fila, $per['Genero']);
        $sheet->setCellValue('D' . $fila, $per['Nombre_Persona']);
        $sheet->setCellValue('E' . $fila, $per['Email_Persona']);
        $sheet->setCellValue('F' . $fila, $per['Direccion_Persona']);
        $sheet->setCellValue('G' . $fila, $per['Telefono_Persona']);
        $fila++;
    }

    // Descargar el archivo
    $writer = new Xlsx($spreadsheet);
        $filename = 'personas_' . date('Ymd_His') . '.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment;filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }
}

