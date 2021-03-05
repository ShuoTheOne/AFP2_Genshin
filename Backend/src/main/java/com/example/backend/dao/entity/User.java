package com.example.backend.dao.entity;

import java.time.LocalDate;
import lombok.*;
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

    //public UserDto toUserDto(){return new UserDto(id,username,password,email,real_name,sex,birthdate,zip_code,city,street,house_number,country,genpoint,isadmin,isregistered);}
}
