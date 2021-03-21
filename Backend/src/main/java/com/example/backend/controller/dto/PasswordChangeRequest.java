package com.example.backend.controller.dto;

import lombok.*;

@Data
@AllArgsConstructor
public class PasswordChangeRequest {

    private String passwordChangeToken;

    private String newPassword;
}
