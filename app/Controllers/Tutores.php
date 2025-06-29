<?php

namespace App\Controllers;

class Tutores extends BaseController
{
    public function index(): string
    {
        return view('paginas/Tutores');
    }
}
