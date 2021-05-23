package com.example.backend.dao.entity;

import com.example.backend.controller.dto.*;
import lombok.*;
import org.apache.commons.codec.digest.DigestUtils;
import javax.persistence.*;
import java.util.UUID;

@Entity
@Table
@NoArgsConstructor
@AllArgsConstructor
@Data
public class CreditCard {
    @Id
    @GeneratedValue
    private int id;

    private String name;

    private String card_number;

    private String salt;

    private String expiration_date;

    private String cvc;

    @ManyToOne(cascade = CascadeType.MERGE)
    private User user;

    public static CreditCard addCard(CreditCardRequest request, User user) {
        String salt = UUID.randomUUID().toString();
        return new CreditCard(
                0,
                request.getName(),
                DigestUtils.sha256Hex(salt + request.getCard_number()),
                salt,
                request.getExpiration_date(),
                DigestUtils.sha256Hex(salt +request.getCvc()),
                user
        );
    }
}
