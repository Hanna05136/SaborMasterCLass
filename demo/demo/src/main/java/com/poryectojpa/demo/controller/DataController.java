package com.poryectojpa.demo.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

import com.poryectojpa.demo.models.Persona;
import com.poryectojpa.demo.repository.personaRepository;

@Controller
public class DataController {

    @Autowired
    private personaRepository personaRepository;

    @GetMapping("/crear-usuarios-prueba")
    public String crearUsuariosPrueba() {
        // Verificar si ya existen usuarios
        if (personaRepository.count() > 0) {
            return "redirect:/login?mensaje=Usuarios ya existen";
        }

        // Crear usuario estudiante de prueba
        Persona estudiante = new Persona();
        estudiante.setDocumento("12345678");
        estudiante.setTipoDocumento("CC");
        estudiante.setGenero("F");
        estudiante.setNombre("Laura Gómez");
        estudiante.setEmail("estudiante@sabor.com");
        estudiante.setDireccion("Calle 123 #45-67");
        estudiante.setTelefono("3001234567");
        estudiante.setRolId(2); // Rol de estudiante
        estudiante.setContrasena("123456");
        personaRepository.save(estudiante);

        // Crear usuario admin de prueba
        Persona admin = new Persona();
        admin.setDocumento("87654321");
        admin.setTipoDocumento("CC");
        admin.setGenero("M");
        admin.setNombre("Admin Master");
        admin.setEmail("admin@sabor.com");
        admin.setDireccion("Calle 456 #78-90");
        admin.setTelefono("3007654321");
        admin.setRolId(1); // Rol de admin
        admin.setContrasena("admin123");
        personaRepository.save(admin);

        return "redirect:/login?mensaje=Usuarios de prueba creados exitosamente";
    }
}






