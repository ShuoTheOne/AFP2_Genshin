package com.example.backend.controller;

import com.example.backend.controller.dto.*;
import com.example.backend.service.AuthService;
import lombok.RequiredArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletResponse;

@RestController
@RequiredArgsConstructor
public class AuthController {

    private AuthService authService;

    @PostMapping("/register")
    public void register(@RequestBody RegisterRequest request) {
        authService.register(request);
    }

    @PostMapping("/login")
    public ResponseEntity<Void> login(LoginRequest loginRequest, HttpServletResponse response) {
        SessionResponse login = authService.login(loginRequest);
        Cookie cookie = new Cookie("login_token", login.getToken());
        cookie.setMaxAge(3 * 60 * 60);
        cookie.setSecure(true);
        cookie.setHttpOnly(true);
        cookie.setPath("/");
        response.addCookie(cookie);
        return ResponseEntity.ok().build();
    }

    @PostMapping("/request-new-password")
    public void requestNewPassword(NewPasswordRequest request) {
        authService.newPasswordRequest(request);
    }

    @PostMapping("/new-password")
    public void setNewPassword(@RequestParam String passwordToken, @RequestBody String newPassword) {
        authService.setNewPasswordByToken(new PasswordChangeRequest(passwordToken, newPassword));
    }
}
