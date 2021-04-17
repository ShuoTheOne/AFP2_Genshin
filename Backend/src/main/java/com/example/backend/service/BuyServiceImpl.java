package com.example.backend.service;

import com.example.backend.controller.dto.BuyRequest;
import com.example.backend.dao.BuyRepository;
import com.example.backend.dao.entity.*;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

@Service
@RequiredArgsConstructor
public class BuyServiceImpl implements BuyService {

    private final BuyRepository buyRepository;

    @Override
    public void addToCart(BuyRequest request, User user) {
        Buy buy=Buy.addToCart(request,user);
        buyRepository.save(buy);
    }
}
