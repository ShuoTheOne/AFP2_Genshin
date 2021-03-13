package com.example.backend.service;

import com.example.backend.controller.dto.*;

public interface AuthService {

    void register(RegisterRequest request);

    SessionResponse login(LoginRequest loginRequest);

    void newPasswordRequest(NewPasswordRequest request);

    void setNewPasswordByToken(PasswordChangeRequest request);
}
