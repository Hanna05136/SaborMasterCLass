package com.poryectojpa.demo.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class CursosPublicosController {

    @GetMapping("/cursos")
    public String mostrarCursos(Model model) {
        model.addAttribute("titulo", "Cursos - Sabor MasterClass");
        return "cursos"; // Renderiza templates/cursos.html
    }
}






