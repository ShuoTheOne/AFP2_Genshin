package com.example.backend.controller;

import com.example.backend.controller.dto.*;
import com.example.backend.dao.entity.User;
import com.example.backend.model.UserData;
import com.example.backend.service.*;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.*;
import org.springframework.http.ResponseEntity;
import org.springframework.util.MultiValueMap;
import org.springframework.web.bind.annotation.*;
import javax.servlet.http.*;
import java.io.*;
import java.time.LocalDate;

@RestController
@RequiredArgsConstructor
@Slf4j
public class AuthController {

    private final AuthService authService;
    private final SessionService sessionService;
    private  final CreditCardService creditCardService;
    @Value("${frontend.url.php}")
    private String frontEndUrl;


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
        response.sendRedirect(frontEndUrl + "/php/index.php?P=login");
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
        response.sendRedirect(frontEndUrl + "/php");
        return ResponseEntity.ok().build();
    }

    @PostMapping("/forgetpassword")
    public void requestNewPassword(@RequestParam MultiValueMap<String,String> paramMap,HttpServletResponse response) throws IOException {
        String username = paramMap.get("username").get(0);
        String email = paramMap.get("email").get(0);
        NewPasswordRequest NewPasswordRequest = new NewPasswordRequest(
                username,
                email
        );
        authService.newPasswordRequest(NewPasswordRequest);
        response.sendRedirect(frontEndUrl + "/php");
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

    @PostMapping("/addcreditcard")
    public void addCard(@RequestParam MultiValueMap<String,String> paramMap,HttpServletResponse response,
                        @CookieValue(value = "login_token",defaultValue = "invalid") String token) throws IOException {
        String name = paramMap.get("cardownername").get(0);
        String card_number = paramMap.get("cardnumber").get(0);
        String expiration_date = paramMap.get("cardmonth").get(0) + "/" + paramMap.get("cardyear").get(0);
        String cvc = paramMap.get("cvc").get(0);
        CreditCardRequest addCardRequest = new CreditCardRequest(
                name,
                card_number,
                expiration_date,
                cvc
        );

        User user = sessionService.getUser(token);
        creditCardService.addCard(addCardRequest, user);
        response.sendRedirect(frontEndUrl + "/php/index.php?P=login");
    }
}
