package com.example.backend.controller.dto;

import lombok.AllArgsConstructor;
import lombok.Data;

@Data
@AllArgsConstructor
public class PasswordChangeRequest {

    private String passwordChangeToken;

    private String newPassword;
}
