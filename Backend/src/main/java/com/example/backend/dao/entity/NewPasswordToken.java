package com.example.backend.dao.entity;

import lombok.*;
import javax.persistence.*;

@Entity
@NoArgsConstructor
@AllArgsConstructor
@Data
public class NewPasswordToken {

    @Id
    @GeneratedValue
    private int id;

    @OneToOne
    private User user;

    private String newPasswordToken;
}
