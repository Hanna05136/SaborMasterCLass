<?php

namespace App\Controllers;

class Cursos extends BaseController
{
    public function index(): string
    {
        return view('paginas/Cursos');
    }
}
