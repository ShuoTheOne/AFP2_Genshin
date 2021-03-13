package com.example.backend.controller.dto;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class LoginRequest {

    @ApiModelProperty(required = true, example = "Teszt")
    private String userName;

    @ApiModelProperty(required = true, example = "ujpichaccu@gmail.com")
    private String password;
}
