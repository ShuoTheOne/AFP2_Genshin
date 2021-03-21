package com.example.backend.controller.dto;

import lombok.*;

@Data
@AllArgsConstructor
public class SessionResponse {

    private String userName;

    private String token;
}
