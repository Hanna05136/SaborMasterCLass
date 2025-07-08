<?php

namespace App\Controllers;

class DescripcionCurso extends BaseController
{
    public function index(): string
    {
        return view('paginas/DescripcionCurso');
    }
}
