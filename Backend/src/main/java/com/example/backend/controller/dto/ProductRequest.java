package com.example.backend.controller.dto;

import io.swagger.annotations.ApiModelProperty;
import lombok.*;
import org.springframework.lang.NonNull;

@Data
@AllArgsConstructor
public class ProductRequest {

    @NonNull
    @ApiModelProperty(required = true, example = "Teszt")
    private String name;

    @NonNull
    @ApiModelProperty(required = true, example = "420")
    private int value;

    @NonNull
    @ApiModelProperty(required = true, example = "Ez egy teszt leírás")
    private String description;

    @NonNull
    @ApiModelProperty(required = true, example = "69")
    private int amount;

    @NonNull
    @ApiModelProperty(required = true, example = "F:\\projektlabor\\AFP2_Genshin\\Backend\\img\\shock-chewing-gum-for-kids-prank-gifts-for-friends-prank-item-original-imafgy4uuqp9xsx8")
    private String img_url;

    @NonNull
    @ApiModelProperty(required = true, example = "Játék")
    private String category;
}
