package com.example.backend.dao;

import com.example.backend.dao.entity.Buy;
import org.springframework.data.jpa.repository.JpaRepository;

public interface BuyRepository extends JpaRepository<Buy, Integer>  {
}
