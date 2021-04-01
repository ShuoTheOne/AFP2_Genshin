package com.example.backend.dao.entity;

import lombok.*;
import javax.persistence.*;

@Entity
@NoArgsConstructor
@AllArgsConstructor
@Data
public class CreditCard {
    @Id
    @GeneratedValue
    private int id;

    private String name;

    private int card_number;

    private int expiration_date;

    private int cvc;

    @ManyToOne(cascade = CascadeType.ALL)
    private User user;
}
