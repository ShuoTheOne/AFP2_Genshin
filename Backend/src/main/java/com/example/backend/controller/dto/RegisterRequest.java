package com.example.backend.controller.dto;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import org.springframework.lang.NonNull;

import javax.validation.constraints.*;
import java.time.LocalDate;

@Data
public class RegisterRequest {

    @NonNull
    @Size(min = 3, max = 50)
    @ApiModelProperty(required = true, example = "Teszt")
    private String username;

    @NonNull
    @Size(min = 8)
    @ApiModelProperty(required = true, example = "password")
    private String password;

    @NonNull
    @Email
    @ApiModelProperty(required = true, example = "ujpichaccu@gmail.com")
    private String email;

    @NonNull
    @ApiModelProperty(required = true, example = "Teszt Elek")
    private String real_name;

    @NonNull
    @ApiModelProperty(required = true, example = "1")
    private int sex;

    @NonNull
    @ApiModelProperty(required = true, example = "1996-09-29")
    private LocalDate birthdate;

    @NonNull
    @ApiModelProperty(required = true, example = "3445")
    private int zip_code;

    @NonNull
    @ApiModelProperty(required = true, example = "Város")
    private String city;

    @NonNull
    @ApiModelProperty(required = true, example = "Uborka")
    private String street;

    @NonNull
    @ApiModelProperty(required = true, example = "69")
    private int house_number;

    @NonNull
    @ApiModelProperty(required = true, example = "Magyarország")
    private String country;

    public RegisterRequest(String username, String password, String salt, String email, String real_name, Integer sex, LocalDate birthdate, Integer zip_code, String city, String street, Integer house_number, String country) {
    }
}
