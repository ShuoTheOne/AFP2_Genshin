package com.example.backend.service;

import com.example.backend.BackendApplication;
import com.example.backend.DatabaseConfig;
import com.example.backend.controller.dto.CreditCardRequest;
import com.example.backend.dao.CreditCardRepository;
import com.example.backend.dao.UserRepository;
import com.example.backend.dao.entity.CreditCard;
import com.example.backend.dao.entity.User;
import org.junit.Before;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.annotation.DirtiesContext;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.junit4.SpringRunner;
import org.springframework.test.context.support.AnnotationConfigContextLoader;

import javax.annotation.Resource;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertNotNull;

@RunWith(SpringRunner.class)
@SpringBootTest(classes = {BackendApplication.class, DatabaseConfig.class})
@ContextConfiguration(
        classes = { DatabaseConfig.class },
        loader = AnnotationConfigContextLoader.class)

public class CreditCardServiceImplTest {

    @Resource
    private CreditCardServiceImpl creditCardService;

    @Resource
    private CreditCardRepository creditCardRepository;

    @Resource
    private UserRepository userRepository;

    @Before
    public void setUp() {
        //creditCardService = new CreditCardServiceImpl(creditCardRepository);

        User user = new User();
        user.setUsername("Teszt");
        userRepository.save(user);
    }


    @Test
    public void addCard() {
        User user = userRepository.getUserByUsername("Teszt");
        CreditCard expectedCreditCard = new CreditCard();
        expectedCreditCard.setUser(user);
        expectedCreditCard.setName("Teszt Elek");
        expectedCreditCard.setCard_number("1234567890123456");
        expectedCreditCard.setExpiration_date("2020/03");
        expectedCreditCard.setCvc("666");

        CreditCardRequest creditCardRequest = new CreditCardRequest(
                "Teszt Elek",
                "1234567890123456",
                "2020/03",
                "666"
        );

        creditCardService.addCard(creditCardRequest,user);

        CreditCard actualCreditCard = creditCardRepository.findAll().stream().limit(1).findAny().get();
        assertNotNull(actualCreditCard);
        assertEquals(expectedCreditCard.getName(), actualCreditCard.getName());
        //assertEquals(expectedCreditCard.getCard_number(), actualCreditCard.getCard_number());
        assertEquals(expectedCreditCard.getExpiration_date(), actualCreditCard.getExpiration_date());
        //assertEquals(expectedCreditCard.getCvc(), actualCreditCard.getCvc());
    }
}