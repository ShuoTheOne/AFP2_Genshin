package com.example.backend.dao;

import com.example.backend.dao.entity.User;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UserRepository extends JpaRepository<User,Integer> {
    User getByEmail(String email);

    User getUserByUsername(String username);

    User getUserBySalt(String salt);
}
