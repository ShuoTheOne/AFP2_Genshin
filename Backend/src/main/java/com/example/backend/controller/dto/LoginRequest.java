package com.example.backend.controller.dto;

import io.swagger.annotations.ApiModelProperty;
import lombok.*;

@NoArgsConstructor
@AllArgsConstructor
@Data
public class LoginRequest {

    @ApiModelProperty(required = true, example = "Teszt")
    private String userName;

    @ApiModelProperty(required = true, example = "password")
    private String password;
}
