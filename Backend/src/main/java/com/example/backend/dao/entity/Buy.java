package com.example.backend.dao.entity;

import com.example.backend.controller.dto.*;
import lombok.*;
import org.apache.commons.codec.digest.DigestUtils;

import javax.persistence.*;
import java.time.*;
import java.util.UUID;
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

    private LocalDateTime date_time;

    @ManyToOne(cascade = CascadeType.ALL)
    private Product product;

    @ManyToOne(cascade = CascadeType.ALL)
    private User user;

    private int count;

    private int prices;

    private String order_number;


    public static Buy addToCart(BuyRequest request, User user) {
        return new Buy(
                0,
                null,
                request.getProduct(),
                user,
                request.getCount(),
                request.getProduct().getValue()* request.getCount(),
                null

        );
    }

    //public BuyDto(){return new BuyDto(id,date_time,product_id,user_id,count,prices);}
}
