package com.example.backend.service;

import com.example.backend.controller.dto.BuyRequest;
import com.example.backend.dao.entity.User;

public interface BuyService {

    void addToCart(BuyRequest request, User user);
}
