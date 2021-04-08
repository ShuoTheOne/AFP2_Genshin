package com.example.backend.dao;

import com.example.backend.dao.entity.*;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductRepository extends JpaRepository<Product, Integer> {

    Product getByName(String name);

    String getByName();
}
