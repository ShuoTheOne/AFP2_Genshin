package com.example.backend.dao.entity;

import lombok.*;
import javax.persistence.*;
// import controller.dto.ProductDto;

@Entity
@Data
@Table
@NoArgsConstructor
@AllArgsConstructor

public class Product {

    @Id
    @GeneratedValue
    private int id;

    private String name;

    private int value;

    private String description;

    private int amount;

    private String img_url;

    //public ProductDto toProductDto(){return new ProductDto(id,name,value,description,amount,img_url);}
}
