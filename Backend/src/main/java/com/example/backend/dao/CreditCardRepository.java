package com.example.backend.dao;

import com.example.backend.dao.entity.CreditCard;
import org.springframework.data.jpa.repository.*;

public interface CreditCardRepository extends JpaRepository<CreditCard, Integer> {

    @Query(value = "select c from CreditCard c where c.card_number = ?1")
    CreditCard findByCard_number(String cardNumber);
}
