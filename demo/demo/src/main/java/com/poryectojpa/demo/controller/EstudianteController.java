package com.poryectojpa.demo.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/estudiante")
public class EstudianteController {

    @GetMapping
    public String vistaEstudiante(Model model) {
        // Simulamos un usuario. Esto puede venir de la sesión o la BD
        model.addAttribute("usuario", "Juan Pérez");
        return "Estudiante"; // Renderiza estudiante.html
    }

    @GetMapping("/miscursos")
    public String misCursos(Model model) {
        // Datos de ejemplo de estudiantes con cursos
        List<EstudianteCurso> estudiantes = new ArrayList<>();
        
        estudiantes.add(new EstudianteCurso(1, "Laura Gómez", "Repostería", "Repostería Creativa"));
        estudiantes.add(new EstudianteCurso(2, "Diego Fernández", "Cocina Internacional", "Cocina Japonesa Tradicional"));
        estudiantes.add(new EstudianteCurso(3, "Mariana Ríos", "Cocina Saludable", "Gastronomía Vegetariana"));
        estudiantes.add(new EstudianteCurso(4, "Carlos Méndez", "Parrilla", "Técnicas de Parrilla y Asado"));
        
        model.addAttribute("estudiantes", estudiantes);
        model.addAttribute("titulo", "Mis Cursos - Sabor MasterClass");
        return "mis-cursos"; // Nueva vista
    }
    
    // Agregar ruta directa sin autenticación
    @GetMapping("/miscursos-directo")
    public String misCursosDirecto(Model model) {
        return misCursos(model);
    }

    // Clase interna para representar los datos del estudiante con curso
    public static class EstudianteCurso {
        private Integer idEstudiante;
        private String nombrePersona;
        private String categoria;
        private String curso;

        public EstudianteCurso(Integer idEstudiante, String nombrePersona, String categoria, String curso) {
            this.idEstudiante = idEstudiante;
            this.nombrePersona = nombrePersona;
            this.categoria = categoria;
            this.curso = curso;
        }

        // Getters
        public Integer getIdEstudiante() { return idEstudiante; }
        public String getNombrePersona() { return nombrePersona; }
        public String getCategoria() { return categoria; }
        public String getCurso() { return curso; }
    }
}

