package com.poryectojpa.demo.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class TutoresController {

    @GetMapping("/tutores")
    public String mostrarTutores(Model model) {
        model.addAttribute("titulo", "Nuestros Tutores - Sabor MasterClass");
        return "tutores";
    }
}






