package com.example.backend.dao;

import com.example.backend.dao.entity.Session;
import org.springframework.data.jpa.repository.JpaRepository;

public interface SessionRepository extends JpaRepository<Session,String> {

    Session findByToken(String token);
}
