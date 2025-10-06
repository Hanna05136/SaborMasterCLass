package com.poryectojpa.demo.controller;

import java.io.IOException;
import java.util.List;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.CellStyle;
import org.apache.poi.ss.usermodel.Font;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.poryectojpa.demo.models.Curso;
import com.poryectojpa.demo.models.Persona;
import com.poryectojpa.demo.repository.cursoRepository;
import com.poryectojpa.demo.repository.personaRepository;

import jakarta.servlet.http.HttpServletResponse;

@Controller
public class AdminController {

    @Autowired
    private personaRepository personaRepository;

    @Autowired
    private cursoRepository cursoRepository;

    @GetMapping("/admin")
    public String mostrarPanelAdmin(Model model) {
        // Datos de usuarios
        List<Persona> personas = personaRepository.findAll();

        // Datos de cursos
        List<Curso> cursos = cursoRepository.findAll();

        // Enviar datos al modelo
        model.addAttribute("personas", personas);
        model.addAttribute("cursos", cursos);

        // Tarjetas resumen (ejemplo básico)
        model.addAttribute("totalUsuarios", personas.size());
        model.addAttribute("totalCursos", cursos.size());
        model.addAttribute("totalTutores", 12); // valor fijo por ahora
        model.addAttribute("nuevasInscripciones", 87); // valor fijo por ahora

        return "admin"; // Renderiza templates/admin.html
    }

    /**
     * @param response
     * @throws IOException
     */
    @GetMapping("/personas/exportarExcel")
    public void exportarExcelCompleto(HttpServletResponse response) throws IOException {

        // Configurar respuesta HTTP
        response.setContentType("application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        response.setHeader("Content-Disposition", "attachment; filename=admin_report.xlsx");

        // Crear libro
        Workbook workbook = new XSSFWorkbook();

        // --- Hoja 1: Usuarios ---
        Sheet sheetUsuarios = workbook.createSheet("Usuarios");
        CellStyle headerStyle = workbook.createCellStyle();
        Font font = workbook.createFont();
        font.setBold(true);
        headerStyle.setFont(font);

        String[] columnasUsuarios = { "ID", "Documento", "Tipo Documento", "Nombre", "Email", "Rol" };
        Row headerUsuarios = sheetUsuarios.createRow(0);
        for (int i = 0; i < columnasUsuarios.length; i++) {
            Cell cell = headerUsuarios.createCell(i);
            cell.setCellValue(columnasUsuarios[i]);
            cell.setCellStyle(headerStyle);
        }

        List<Persona> personas = personaRepository.findAll();
        int rowNum = 1;
        for (Persona p : personas) {
            Row row = sheetUsuarios.createRow(rowNum++);
            row.createCell(0).setCellValue(p.getId() != null ? p.getId() : 0);
            row.createCell(1).setCellValue(p.getDocumento() != null ? p.getDocumento() : "");
            row.createCell(2).setCellValue(p.getTipoDocumento() != null ? p.getTipoDocumento() : "");
            row.createCell(3).setCellValue(p.getNombre() != null ? p.getNombre() : "");
            row.createCell(4).setCellValue(p.getEmail() != null ? p.getEmail() : "");

            // Rol en texto
            String rolTexto;
            if (p.getRolId() == null) {
                rolTexto = "Sin rol";
            } else {
                switch (p.getRolId()) {
                    case 1 -> rolTexto = "Administrador";
                    case 2 -> rolTexto = "Estudiante";
                    case 3 -> rolTexto = "Tutor";
                    case 4 -> rolTexto = "Proveedor";
                    default -> rolTexto = "Desconocido";
                }
            }
            row.createCell(5).setCellValue(rolTexto);
        }
        for (int i = 0; i < columnasUsuarios.length; i++) {
            sheetUsuarios.autoSizeColumn(i);
        }

        // --- Hoja 2: Cursos ---
        Sheet sheetCursos = workbook.createSheet("Cursos");
        String[] columnasCursos = { "ID", "Nombre", "Duración", "Número Curso", "Detalle", "Costo", "Nivel",
                "Categoría" };
        Row headerCursos = sheetCursos.createRow(0);
        for (int i = 0; i < columnasCursos.length; i++) {
            Cell cell = headerCursos.createCell(i);
            cell.setCellValue(columnasCursos[i]);
            cell.setCellStyle(headerStyle);
        }

        List<Curso> cursos = cursoRepository.findAll();
        int rowCursoNum = 1;
        for (Curso c : cursos) {
            Row row = sheetCursos.createRow(rowCursoNum++);
            row.createCell(0).setCellValue(c.getId() != null ? c.getId() : 0);
            row.createCell(1).setCellValue(c.getNombre() != null ? c.getNombre() : "");
            row.createCell(2).setCellValue(c.getDuracion() != null ? c.getDuracion() : "");
            row.createCell(3).setCellValue(c.getNumcurso() != null ? c.getNumcurso() : "");
            row.createCell(4).setCellValue(c.getDetalle() != null ? c.getDetalle() : "");
            row.createCell(5).setCellValue(c.getCosto() != null ? c.getCosto() : 0);
            row.createCell(6).setCellValue(c.getAprendizaje() != null ? c.getAprendizaje() : "");
            row.createCell(7).setCellValue(c.getCategoria() != null ? c.getCategoria().toString() : "");
            
        }
        for (int i = 0; i < columnasCursos.length; i++) {
            sheetCursos.autoSizeColumn(i);
        }

        // Escribir archivo en la respuesta
        workbook.write(response.getOutputStream());
        workbook.close();
    }

}
