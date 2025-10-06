package com.poryectojpa.demo.repository;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.poryectojpa.demo.models.Persona;

@Repository
public interface personaRepository extends JpaRepository<Persona, Integer> {

    Optional<Persona> findByEmail(String email);
}
