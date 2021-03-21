package com.example.backend.config;

import com.mailjet.client.*;
import org.springframework.context.annotation.*;

@Configuration
public class MailClient {

    private final ClientOptions clientOptions;

    public MailClient() {
        this.clientOptions = ClientOptions.builder()
                .apiKey("fb76000f9da207277f226771b606dc07")
                .apiSecretKey("d50fc7bcf45d7de1436de6585346f489")
                .build();
    }

    @Bean
    public MailjetClient client() {
        return new MailjetClient(clientOptions);
    }
}
