package com.example.backend.service;

import com.example.backend.*;
import com.example.backend.controller.dto.*;
import com.example.backend.dao.*;
import com.example.backend.dao.entity.*;
import org.apache.commons.codec.digest.DigestUtils;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.mockito.*;
import org.mockito.junit.MockitoJUnitRunner;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.annotation.DirtiesContext;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.junit4.SpringRunner;
import org.springframework.test.context.support.AnnotationConfigContextLoader;

import javax.annotation.Resource;
import java.time.LocalDate;

import static org.junit.Assert.*;

@RunWith(SpringRunner.class)
@SpringBootTest(classes = {BackendApplication.class, DatabaseConfig.class})
@ContextConfiguration(
        classes = { DatabaseConfig.class },
        loader = AnnotationConfigContextLoader.class)
@DirtiesContext(classMode = DirtiesContext.ClassMode.BEFORE_EACH_TEST_METHOD)
public class AuthServiceImplTest {

    @Resource
    private AuthServiceImpl authService;
    @Resource
    private UserRepository userRepository;
    @Resource
    private SessionRepository sessionRepository;
    @Resource
    private NewPasswordTokenRepository newPasswordTokenRepository;


    @Test
    public void register() {
        User expectedUser = new User();
        expectedUser.setUsername("Teszt");
        expectedUser.setEmail("ujpichaccu@gmail.com");
        expectedUser.setReal_name("Teszt Elek");
        expectedUser.setSex(1);
        expectedUser.setBirthdate(LocalDate.parse("1996-09-29"));
        expectedUser.setZip_code(3445);
        expectedUser.setCity("Város");
        expectedUser.setStreet("Uborka");
        expectedUser.setHouse_number(69);
        expectedUser.setCountry("Magyarország");


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

        authService.register(registerRequest);

        User actualUser = userRepository.getUserByUsername("Teszt");
        String salt = actualUser.getSalt();
        String encodedPass = DigestUtils.sha256Hex(salt + "password");
        assertNotNull(actualUser);
        assertEquals(expectedUser.getUsername(), actualUser.getUsername());
        assertEquals(encodedPass, actualUser.getPassword());
        assertEquals(expectedUser.getEmail(), actualUser.getEmail());
        assertEquals(expectedUser.getReal_name(), actualUser.getReal_name());
        assertEquals(expectedUser.getSex(), actualUser.getSex());
        assertEquals(expectedUser.getBirthdate(), actualUser.getBirthdate());
        assertEquals(expectedUser.getZip_code(), actualUser.getZip_code());
        assertEquals(expectedUser.getCity(), actualUser.getCity());
        assertEquals(expectedUser.getStreet(), actualUser.getStreet());
        assertEquals(expectedUser.getHouse_number(), actualUser.getHouse_number());
        assertEquals(expectedUser.getCountry(), actualUser.getCountry());
    }

    @Test
    public void login(){
        this.register();
        User expectedUser = new User();
        expectedUser.setUsername("Teszt");

        LoginRequest loginRequest = new LoginRequest(
                "Teszt",
                "password"
        );
        User user = userRepository.getUserByUsername("Teszt");
        user.setIsregistered(true);
        userRepository.save(user);
        SessionResponse actualSession = authService.login(loginRequest);

        Session sessionEntity = sessionRepository.findByToken(actualSession.getToken());
        assertNotNull(sessionEntity);
        assertEquals(expectedUser.getUsername(), actualSession.getUserName());
        assertEquals(expectedUser.getUsername(), sessionEntity.getUser().getUsername());
    }

    @Test
    public void newPasswordRequest(){
        this.register();
        User expectedUser = new User();
        expectedUser.setUsername("Teszt");
        expectedUser.setEmail("ujpichaccu@gmail.com");

        NewPasswordRequest newPasswordRequest = new NewPasswordRequest(
                "Teszt",
                "ujpichaccu@gmail.com"
        );

        authService.newPasswordRequest(newPasswordRequest);

        User actualUser = userRepository.getUserByUsername("Teszt");
        assertNotNull(actualUser);
        assertEquals(expectedUser.getUsername(), actualUser.getUsername());
        assertEquals(expectedUser.getEmail(), actualUser.getEmail());
    }

    @Test
    public void setNewPassword() {
        this.newPasswordRequest();
        NewPasswordToken passwordToken = newPasswordTokenRepository.findAll().get(0);
        PasswordChangeRequest passwordChangeRequest = new PasswordChangeRequest(passwordToken.getNewPasswordToken(), "faszom"); //azért ez hogy elég hosszú legyen a jelszó, és így 15 inch!!!
        authService.setNewPasswordByToken(passwordChangeRequest);
    }

}
