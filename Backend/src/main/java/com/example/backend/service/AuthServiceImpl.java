package com.example.backend.service;

import com.example.backend.controller.dto.*;
import com.example.backend.dao.*;
import com.example.backend.dao.entity.*;
import lombok.*;
import org.apache.commons.codec.digest.DigestUtils;
import org.springframework.stereotype.Service;
import java.time.*;
import java.time.temporal.ChronoUnit;
import java.util.*;

@Service
@RequiredArgsConstructor
public class AuthServiceImpl implements AuthService {

    private final UserRepository userRepository;
    private final SessionRepository sessionRepository;
    private final NewPasswordTokenRepository newPasswordTokenRepository;
    //Todo email küldő még nicns kész.
    private final EmailSenderService emailService;

    //Todo saját exeption és elkapó

    @Override
    public void register(RegisterRequest request) {
        Optional.ofNullable(userRepository.getByEmail(request.getEmail())).ifPresent(user ->
            {throw new RuntimeException(String.format("%s emailcím foglalt ", user.getEmail()));}
        );
        Optional.ofNullable(userRepository.getUserByUsername(request.getUsername())).ifPresent(user ->
            {throw new RuntimeException(String.format("%s felhaszánlónév foglalt.", request.getUsername())); }
        );
        User user = User.createUser(request);
        userRepository.save(user);
        emailService.sendActivationMail(user);
    }

    @Override
    public SessionResponse login(LoginRequest loginRequest) {
        User user = Optional.ofNullable(userRepository.getUserByUsername(loginRequest.getUserName())).orElseThrow(() ->
            new RuntimeException("User does not exist")
        );
        String salt = user.getSalt();
        String encodedPass = user.getPassword();
        if (DigestUtils.sha256Hex(salt + loginRequest.getPassword()).equals(encodedPass) && user.isIsregistered()) {
            Session session = sessionRepository.save(new Session(null, user, UUID.randomUUID().toString(), LocalDateTime.now(), LocalDateTime.now().plus(3, ChronoUnit.HOURS)));
            return new SessionResponse(user.getUsername(), session.getToken());
        } else {
            throw new RuntimeException("User credentials were incorrect");
        }
    }

    @Override
    public void newPasswordRequest(NewPasswordRequest request) {
        User user = Optional.ofNullable(userRepository.getUserByUsername(request.getUserName())).orElseThrow(() ->
                new RuntimeException("User does not exist")
        );
        if (!user.getEmail().equals(request.getEmail())) {
            throw new RuntimeException("Username is not for this email address");
        }
        NewPasswordToken newPasswordToken = newPasswordTokenRepository.save(new NewPasswordToken(0, user, UUID.randomUUID().toString()));
        emailService.sendNewPasswordMail(newPasswordToken);
    }

    @Override
    public void setNewPasswordByToken(PasswordChangeRequest request) {
        NewPasswordToken newPasswordToken = Optional.ofNullable(newPasswordTokenRepository.getByNewPasswordToken(request.getPasswordChangeToken()))
                .orElseThrow(() -> new RuntimeException("Token is not valid"));
        User user = newPasswordToken.getUser();
        user.setPassword(request.getNewPassword());
        userRepository.save(user);
        newPasswordTokenRepository.delete(newPasswordToken);
        emailService.sendPasswordChanged(user);
    }

    @Override
    public void activate(String token) {
        User user = Optional.ofNullable(userRepository.getUserBySalt(token))
                .orElseThrow(() -> new RuntimeException("Token is not valid"));
        user.setIsregistered(true);
        userRepository.save(user);
    }
}
