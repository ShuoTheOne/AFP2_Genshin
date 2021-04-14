package com.example.backend.service;

import com.example.backend.controller.dto.CreditCardRequest;
import com.example.backend.dao.entity.User;

public interface CreditCardService {

    void addCard(CreditCardRequest request, User user);
}
