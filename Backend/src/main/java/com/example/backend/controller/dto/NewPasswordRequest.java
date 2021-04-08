package com.example.backend.controller.dto;

import io.swagger.annotations.ApiModelProperty;
import lombok.*;

@Data
@AllArgsConstructor
public class NewPasswordRequest {

    @ApiModelProperty(required = true, example = "Teszt")
    private String userName;

    @ApiModelProperty(required = true, example = "ujpichaccu@gmail.com")
    private String email;
}
