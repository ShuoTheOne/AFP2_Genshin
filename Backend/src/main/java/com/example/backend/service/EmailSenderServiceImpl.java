package com.example.backend.service;

import com.example.backend.dao.entity.*;
import com.mailjet.client.*;
import com.mailjet.client.errors.MailjetException;
import com.mailjet.client.transactional.*;
import com.mailjet.client.transactional.response.SendEmailsResponse;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Service;

@Service
@RequiredArgsConstructor
public class EmailSenderServiceImpl implements EmailSenderService {

    private final MailjetClient client;
    @Value("${frontend.url.php}")
    private String frontEndUrl;

    @Value("${email.sender.address}")
    private String senderEmailAddress;

    @Value("${email.sender.name}")
    private String senderName;

    @Value("${backend.url:localhost:8080}")
    private String applicationUrl;

    @Value("${frontend.url:localhost:80}")
    private String frontendUrl;

    private static final String ACTIVATION_LINK = "/activate?token=";
    private static final String NEW_PASSWORD_LINK = "/forgetpassword-repassword/";

    @Override
    public void sendActivationMail(User user) {
        TransactionalEmail email = this.composeMail(
                user,
                "Successful registration in Webshop.",
                "Sikeres regisztráció a Webshopban",
                String.format("Ha szeretné megerősíteni a regisztrációját kérem kattintson az alábbi linkre: <p><a href=\"%s%s%s\">Ide</a></p>", applicationUrl, ACTIVATION_LINK, user.getSalt())
        );
        SendEmailsRequest request = SendEmailsRequest
                .builder()
                .message(email)
                .build();
        try {
            SendEmailsResponse response = request.sendWith(client);
        } catch (MailjetException e) {
            throw new RuntimeException("Email can not be send:", e);
        }
    }

    @Override
    public void sendNewPasswordMail(NewPasswordToken newPasswordToken) {
        TransactionalEmail email = this.composeMail(
                newPasswordToken.getUser(),
                "Password change request.",
                "Jelszóváltoztatási kérelem",
                String.format("Jeleszóváltoztatáshoz kérem kattintson az alábbi <p><a href=\"%s%s%s\">Ide</a></p>", frontEndUrl, NEW_PASSWORD_LINK, newPasswordToken.getNewPasswordToken())
        );
        SendEmailsRequest request = SendEmailsRequest
                .builder()
                .message(email)
                .build();
        try {
            SendEmailsResponse response = request.sendWith(client);
        } catch (MailjetException e) {
            throw new RuntimeException("Email can not be send:", e);
        }
    }

    @Override
    public void sendPasswordChanged(User user) {
        TransactionalEmail email = this.composeMail(
                user,
                "Password changed.",
                "Jelszava megváltozott",
                "Jelszava megváltozott, ha nem ön változtatta meg kérjük lépjen be és változtassa meg újra, majd vegye fel a kapcsolatot az ügyfélszolgálatunkkal."
        );
        SendEmailsRequest request = SendEmailsRequest
                .builder()
                .message(email)
                .build();
        try {
            SendEmailsResponse response = request.sendWith(client);
        } catch (MailjetException e) {
            throw new RuntimeException("Email can not be send:", e);
        }
    }

    private TransactionalEmail composeMail(User recipient, String subject, String header, String body) {
        return TransactionalEmail
                .builder()
                .to(new SendContact(recipient.getEmail(), recipient.getReal_name()))
                .from(new SendContact(senderEmailAddress, senderName))
                .htmlPart(String.format("<h1>%s</h1></br>%s", header, body))
                .subject(subject)
                .trackOpens(TrackOpens.ENABLED)
                .header("test-header-key", "test-value")
                .customID("custom-id-value")
                .build();
    }
}
