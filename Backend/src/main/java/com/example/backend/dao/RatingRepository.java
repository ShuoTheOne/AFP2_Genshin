package com.example.backend.dao;

import com.example.backend.dao.entity.Rating;
import org.springframework.data.jpa.repository.JpaRepository;

public interface RatingRepository extends JpaRepository<Rating, Integer>{
}
