package com.example.backend.dao.entity;

import java.time.LocalDate;
import java.util.UUID;

import com.example.backend.controller.dto.RegisterRequest;
import lombok.*;
import org.apache.commons.codec.digest.DigestUtils;

import javax.persistence.*;
// import controller.dto.UserDto;

@Entity
@Data
@Table
@NoArgsConstructor
@AllArgsConstructor

public class User {

    @Id
    @GeneratedValue
    private int id;

    private String username;

    private String password;

    private String salt;

    private String email;

    private String real_name;

    private int sex;

    private LocalDate birthdate;

    private int zip_code;

    private String city;

    private String street;

    private int house_number;

    private String country;

    private int genpoint;

    private boolean isadmin;

    private boolean isregistered;

    public static User createUser(RegisterRequest request) {
        String salt = UUID.randomUUID().toString();
        return new User(
                0,
                request.getUsername(),
                DigestUtils.sha256Hex(salt + request.getPassword()),
                salt,
                request.getEmail(),
                request.getReal_name(),
                request.getSex(),
                request.getBirthdate(),
                request.getZip_code(),
                request.getCity(),
                request.getStreet(),
                request.getHouse_number(),
                request.getCountry(),
                0,
                false,
                true
        );
    }

    public void setPassword(String newPassword) {
        password = DigestUtils.sha256Hex(salt + newPassword);
    }

    //public UserDto toUserDto(){return new UserDto(id,username,password,email,real_name,sex,birthdate,zip_code,city,street,house_number,country,genpoint,isadmin,isregistered);}
}
