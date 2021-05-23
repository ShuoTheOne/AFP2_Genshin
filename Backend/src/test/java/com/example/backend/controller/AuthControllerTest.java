package com.example.backend.controller;

import com.example.backend.controller.dto.*;
import com.example.backend.dao.entity.User;
import com.example.backend.model.UserData;
import com.example.backend.service.*;
import org.junit.*;
import org.junit.Assert;
import org.junit.runner.RunWith;
import org.mockito.*;
import org.mockito.junit.MockitoJUnitRunner;
import org.powermock.reflect.Whitebox;
import org.springframework.util.*;

import javax.servlet.http.*;
import java.io.IOException;
import java.time.LocalDate;
import java.util.Collections;


@RunWith(MockitoJUnitRunner.class)
public class AuthControllerTest {

    @InjectMocks
    private AuthController authController;

    @Mock
    private AuthService authService;
    @Mock
    private SessionService sessionService;
    @Mock
    private CreditCardService creditCardService;
    @Mock
    private HttpServletResponse httpServletResponse;

    @Before
    public void setUp() throws Exception {
        Whitebox.setInternalState(authController, "frontEndUrl", "");
    }

    @Test
    public void register() throws IOException {
        // prepare
        MultiValueMap<String, String> paramMap = new LinkedMultiValueMap<>();
        paramMap.put("username", Collections.singletonList("Teszt"));
        paramMap.put("password", Collections.singletonList("password"));
        paramMap.put("email", Collections.singletonList("ujpichaccu@gmail.com"));
        paramMap.put("real_name", Collections.singletonList("Teszt Elek"));
        paramMap.put("sex", Collections.singletonList("1"));
        paramMap.put("birthdate", Collections.singletonList("1996-09-29"));
        paramMap.put("zip_code", Collections.singletonList("3445"));
        paramMap.put("city", Collections.singletonList("Város"));
        paramMap.put("street", Collections.singletonList("Uborka"));
        paramMap.put("house_number", Collections.singletonList("69"));
        paramMap.put("country", Collections.singletonList("Magyarország"));

        RegisterRequest registerRequest = new RegisterRequest(
                "Teszt",
                "password",
                "ujpichaccu@gmail.com",
                "Teszt Elek",
                1,
                LocalDate.parse("1996-09-29"),
                3445,
                "Város",
                "Uborka",
                69,
                "Magyarország"
        );

        // act
        authController.register(paramMap, httpServletResponse);

        // verify
        Mockito.verify(authService).register(registerRequest);
        Mockito.verify(httpServletResponse).sendRedirect("/php/index.php?P=login");
    }

    @Test
    public void login() throws IOException {
        MultiValueMap<String,String> paramMap = new LinkedMultiValueMap<>();
            paramMap.put("username", Collections.singletonList("Teszt"));
            paramMap.put("password", Collections.singletonList("password"));

        SessionResponse sessionResponse= new SessionResponse("Teszt","1234");
        Mockito.when(authService.login(Mockito.any(LoginRequest.class))).thenReturn(sessionResponse);
        Cookie cookie = new Cookie("login_token", "1234");
        cookie.setMaxAge(3 * 60 * 60);
        cookie.setSecure(true);
        cookie.setHttpOnly(true);
        cookie.setPath("/");

        LoginRequest loginRequest = new LoginRequest(
                "Teszt",
                "password"
        );

        authController.login(paramMap, httpServletResponse);

        Mockito.verify(authService).login(loginRequest);
        // Mockito.verify(httpServletResponse).addCookie(cookie); nincs equal metódusa cookinak alapból
        Mockito.verify(httpServletResponse).sendRedirect("/php");
    }

    @Test
    public void requestNewPassword() throws IOException{
        MultiValueMap<String,String> paramMap = new LinkedMultiValueMap<>();
            paramMap.put("username", Collections.singletonList("Teszt"));
            paramMap.put("email", Collections.singletonList("ujpichaccu@gmail.com"));

        NewPasswordRequest newPasswordRequest = new NewPasswordRequest(
                "Teszt",
                "ujpichaccu@gmail.com"
        );

        authController.requestNewPassword(paramMap,httpServletResponse);

        Mockito.verify(authService).newPasswordRequest(newPasswordRequest);
        Mockito.verify(httpServletResponse).sendRedirect("/php");
    }

    @Test
    public void setNewPassword() {

        authController.setNewPassword("PasswordT","Password1");
        Mockito.verify(authService).setNewPasswordByToken(new PasswordChangeRequest("PasswordT","Password1"));
    }

    @Test
    public void me() {
        UserData userData=new UserData("Teszt","ujpichaccu@gmail.com");
        Mockito.when(sessionService.bySession("token")).thenReturn(userData);

        Assert.assertEquals(userData, authController.me("token"));
    }

    @Test
    public void addCard() throws IOException {
        MultiValueMap<String,String> paramMap = new LinkedMultiValueMap<>();
            paramMap.put("cardownername", Collections.singletonList("Teszt Elek"));
            paramMap.put("cardnumber", Collections.singletonList("1234567890123456"));
            paramMap.put("cardmonth",Collections.singletonList("05"));
            paramMap.put("cardyear",Collections.singletonList("22"));
            paramMap.put("cvc", Collections.singletonList("666"));


        authController.addCard(paramMap, httpServletResponse,"token");

        CreditCardRequest addCardRequest = new CreditCardRequest(
                "Teszt Elek",
                "1234567890123456",
                "05/22",
                "666"
        );
        User user = sessionService.getUser("token");


        Mockito.verify(creditCardService).addCard(addCardRequest,user);
        Mockito.verify(httpServletResponse).sendRedirect("/php/index.php?P=login");
    }
}