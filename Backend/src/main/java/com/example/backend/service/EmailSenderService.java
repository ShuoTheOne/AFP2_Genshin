package com.example.backend.service;

import com.example.backend.dao.entity.NewPasswordToken;
import com.example.backend.dao.entity.User;

public interface EmailSenderService {
    void sendActivationMail(User user);

    void sendNewPasswordMail(NewPasswordToken newPasswordToken);
}
