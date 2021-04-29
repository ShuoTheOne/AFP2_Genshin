package com.example.backend.service;

import com.example.backend.controller.dto.*;
import com.example.backend.dao.entity.User;

import java.util.List;

public interface ProductService {

    void addProduct(ProductRequest request);

    List<ProductRequest> getProduct();

    List<ProductRequest> getProductsByCategory(String category);

    List<ProductRequest> getByName(String name);

    void addRating(RatingRequest request, User user);
}
