package com.example.backend.dao.entity;

import lombok.*;
import javax.persistence.*;
import java.time.LocalDate;
// import controller.dto.BuyDto;

@Entity
@Data
@Table
@NoArgsConstructor
@AllArgsConstructor

public class Buy {

    @Id
    @GeneratedValue
    private int id;

    private LocalDate date_time;

    @ManyToOne(cascade = CascadeType.ALL)
    private Product product;

    @ManyToOne(cascade = CascadeType.ALL)
    private User user;

    private int count;

    private String prices;

    //public BuyDto(){return new BuyDto(id,date_time,product_id,user_id,count,prices);}
}
