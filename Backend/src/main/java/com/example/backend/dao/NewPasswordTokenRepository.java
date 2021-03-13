package com.example.backend.dao;

import com.example.backend.dao.entity.NewPasswordToken;
import org.springframework.data.jpa.repository.JpaRepository;

public interface NewPasswordTokenRepository extends JpaRepository<NewPasswordToken, Integer> {
    NewPasswordToken getByNewPasswordToken(String token);
}
