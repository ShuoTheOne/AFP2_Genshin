package com.example.backend.dao.entity;

import lombok.*;
import javax.persistence.*;
import java.time.LocalDate;
// import controller.dto.RatingDto;

@Entity
@Data
@Table
@NoArgsConstructor
@AllArgsConstructor

public class Rating {

    @Id
    @GeneratedValue
    private int id;

    private int star;

    private String comment;

    @ManyToOne(cascade = CascadeType.ALL)
    private Product product;

    @ManyToOne(cascade = CascadeType.ALL)
    private User user;

    private LocalDate date;

    //public RatingDto(){return new RatingDto(id,star,comment,product_id,user_id,date);}
}
