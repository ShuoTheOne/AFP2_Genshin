package com.example.backend.controller.dto;

import com.example.backend.dao.entity.*;
import io.swagger.annotations.ApiModelProperty;
import lombok.*;

@Data
@AllArgsConstructor
public class BuyRequest {

    @ApiModelProperty(required = true, example = "1")
    private Product product;

    @ApiModelProperty(required = true, example = "1")
    private int count;
}
