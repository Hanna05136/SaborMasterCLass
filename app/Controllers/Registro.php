<?php

namespace App\Controllers;

class Registro extends BaseController
{
    public function index(): string
    {
        return view('paginas/registro');
    }
}

