package com.example.backend.service;

import com.example.backend.controller.dto.CreditCardRequest;
import com.example.backend.dao.*;
import com.example.backend.dao.entity.*;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;


@Service
@RequiredArgsConstructor
public class CreditCardServiceImpl implements CreditCardService {

    private final CreditCardRepository creditCardRepository;

    @Override
    public void addCard(CreditCardRequest request, User user) {
        CreditCard creditCard = CreditCard.addCard(request, user);
        creditCardRepository.save(creditCard);

    }
}
