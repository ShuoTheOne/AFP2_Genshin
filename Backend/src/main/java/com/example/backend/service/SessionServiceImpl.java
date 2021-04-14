package com.example.backend.service;

import com.example.backend.dao.SessionRepository;
import com.example.backend.dao.entity.*;
import com.example.backend.model.UserData;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
@RequiredArgsConstructor
class SessionServiceImpl implements SessionService {

    private final SessionRepository repository;

    @Override
    public UserData bySession(String token) {
        return Optional.ofNullable(repository.findByToken(token))
                .filter(Session::isValid)
                .map(Session::getUser)
                .map(User::toUserData)
                .orElseThrow(() -> new RuntimeException("session expired."));
    }

    @Override
    public User getUser(String token) {
        return Optional.ofNullable(repository.findByToken(token))
                .filter(Session::isValid)
                .map(Session::getUser)
                .orElseThrow(() -> new RuntimeException("session expired."));
    }
}
