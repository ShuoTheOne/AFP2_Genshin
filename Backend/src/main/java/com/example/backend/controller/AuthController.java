package com.example.backend.controller;

import com.example.backend.controller.dto.*;
import com.example.backend.model.UserData;
import com.example.backend.service.*;
import lombok.RequiredArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletResponse;

@RestController
@RequiredArgsConstructor
public class AuthController {

    private final AuthService authService;
    private final SessionService sessionService;

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
    public void requestNewPassword(@RequestBody NewPasswordRequest request) {
        authService.newPasswordRequest(request);
    }

    @PostMapping("/new-password")
    public void setNewPassword(@RequestParam String passwordToken, @RequestBody String newPassword) {
        authService.setNewPasswordByToken(new PasswordChangeRequest(passwordToken, newPassword));
    }

    @GetMapping("/activate")
    private String activate(@RequestParam String token) {
        authService.activate(token);
        return "Sikeres aktiváció";
    }

    @GetMapping("/me")
    public UserData me(@CookieValue(value = "login_token",defaultValue = "invalid") String token) {
        return sessionService.bySession(token);
    }
}
