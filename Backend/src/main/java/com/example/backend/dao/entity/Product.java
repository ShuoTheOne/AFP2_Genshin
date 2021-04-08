package com.example.backend.dao.entity;

import com.example.backend.controller.dto.ProductRequest;
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

    private String category;

    public static Product addProduct(ProductRequest request) {
        return new Product(
                0,
                request.getName(),
                request.getValue(),
                request.getDescription(),
                request.getAmount(),
                request.getImg_url(),
                request.getCategory()
        );
    }

    public ProductRequest toProductRequest() {
        return new ProductRequest(name, value,description,amount,img_url,category);
    }

    //public ProductDto toProductDto(){return new ProductDto(id,name,value,description,amount,img_url);}
}
