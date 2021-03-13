package com.example.backend.dao.entity;

import lombok.*;
import javax.persistence.*;
import java.time.LocalDateTime;

@Entity
@Data
@Table
@NoArgsConstructor
@AllArgsConstructor
public class Session {

    @Id
    @OneToOne(cascade = CascadeType.ALL)
    private User user;

    private String token;

    private LocalDateTime login_time;

    private LocalDateTime validity;
}
