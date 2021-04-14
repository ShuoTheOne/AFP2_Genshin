package com.example.backend.controller.dto;

import io.swagger.annotations.ApiModelProperty;
import lombok.*;

@Data
@AllArgsConstructor
public class CreditCardRequest {

    @ApiModelProperty(required = true, example = "Teszt Elek")
    private String name;

    @ApiModelProperty(required = true, example = "1234567890123456")
    private String card_number;

    @ApiModelProperty(required = true, example = "2020/03")
    private String expiration_date;

    @ApiModelProperty(required = true, example = "666")
    private String cvc;


}
