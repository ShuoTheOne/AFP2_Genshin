package com.example.backend.controller;

import com.example.backend.controller.dto.*;
import com.example.backend.model.UserData;
import com.example.backend.service.*;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.http.ResponseEntity;
import org.springframework.util.MultiValueMap;
import org.springframework.web.bind.annotation.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.time.LocalDate;

@RestController
@RequiredArgsConstructor
@Slf4j
public class AuthController {

    private final AuthService authService;
    private final SessionService sessionService;

    @PostMapping("/register")
    public void register(@RequestParam MultiValueMap<String,String> paramMap,HttpServletResponse response) throws IOException {
        String username = paramMap.get("username").get(0);
        String password = paramMap.get("password").get(0);
        String email = paramMap.get("email").get(0);
        String real_name = paramMap.get("real_name").get(0);
        Integer sex = Integer.parseInt(paramMap.get("sex").get(0));
        LocalDate birthdate = LocalDate.parse(paramMap.get("birthdate").get(0));
        Integer zip_code = Integer.parseInt(paramMap.get("zip_code").get(0));
        String city = paramMap.get("city").get(0);
        String street = paramMap.get("street").get(0);
        Integer house_number = Integer.parseInt(paramMap.get("house_number").get(0));
        String country = paramMap.get("country").get(0);
        RegisterRequest registerRequest = new RegisterRequest(
                username,
                password,
                email,
                real_name,
                sex,
                birthdate,
                zip_code,
                city,
                street,
                house_number,
                country
        );
        authService.register(registerRequest);
        response.sendRedirect("http://localhost/frontend/php/");
    }

    @PostMapping("/login")
    public ResponseEntity<Void> login(@RequestParam MultiValueMap<String,String> paramMap, HttpServletResponse response) throws IOException {
        String username = paramMap.get("username").get(0);
        String password = paramMap.get("password").get(0);
        LoginRequest loginRequest = new LoginRequest();
        loginRequest.setUserName(username);
        loginRequest.setPassword(password);
        SessionResponse login = authService.login(loginRequest);
        Cookie cookie = new Cookie("login_token", login.getToken());
        cookie.setMaxAge(3 * 60 * 60);
        cookie.setSecure(true);
        cookie.setHttpOnly(true);
        cookie.setPath("/");
        response.addCookie(cookie);
        response.sendRedirect("http://localhost/frontend/php/");
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
