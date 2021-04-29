package com.example.backend.controller.dto;

import com.example.backend.dao.entity.*;
import io.swagger.annotations.ApiModelProperty;
import lombok.*;
import java.time.LocalDate;

@Data
@AllArgsConstructor
public class RatingRequest {

    @ApiModelProperty(required = true, example = "4")
    private int star;

    @ApiModelProperty(required = true, example = "Ez egy teszt comment")
    private String comment;

    @ApiModelProperty(required = true, example = "1")
    private Product product;

    @ApiModelProperty(required = true, example = "1")
    private User user;

    @ApiModelProperty(required = true, example = "2021-04-29")
    private LocalDate date;
}
