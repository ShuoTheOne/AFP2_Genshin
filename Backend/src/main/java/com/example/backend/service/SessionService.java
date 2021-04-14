package com.example.backend.service;

import com.example.backend.dao.entity.User;
import com.example.backend.model.UserData;

public interface SessionService {

    UserData bySession (String token);

    User getUser(String token);
}
