SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
USE genshop;

CREATE TABLE IF NOT EXISTS `buy` (
    `id` int(11) NOT NULL,
    `count` int(11) NOT NULL,
    `date_time` date DEFAULT NULL,
    `order_number` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `prices` int(11) NOT NULL,
    `product_id` int(11) DEFAULT NULL,
    `user_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `FKcbwqahvf52blwmv5p0ulnpqgt` (`product_id`),
    KEY `FKkhggp13kai501c16q0o3xt1ap` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;


CREATE TABLE IF NOT EXISTS `credit_card` (
    `id` int(11) NOT NULL,
    `card_number` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `cvc` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `expiration_date` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `name` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `salt` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `user_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `FKh4wi9724muee2kp2c4ku1yia2` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

CREATE TABLE IF NOT EXISTS `hibernate_sequence` (
    `next_val` bigint(20) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

CREATE TABLE IF NOT EXISTS `new_password_token` (
    `id` int(11) NOT NULL,
    `new_password_token` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `user_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `FK42mia7pk06rdodfhv13i16w1k` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

CREATE TABLE IF NOT EXISTS `product` (
    `id` int(11) NOT NULL,
    `amount` int(11) NOT NULL,
    `category` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `description` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `img_url` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `name` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `value` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

CREATE TABLE IF NOT EXISTS `rating` (
    `id` int(11) NOT NULL,
    `comment` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `date` date DEFAULT NULL,
    `star` int(11) NOT NULL,
    `product_id` int(11) DEFAULT NULL,
    `user_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `FKlkuwie0au2dru36asng9nywmh` (`product_id`),
    KEY `FKpn05vbx6usw0c65tcyuce4dw5` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

CREATE TABLE IF NOT EXISTS `session` (
    `id` bigint(20) NOT NULL,
    `login_time` datetime(6) DEFAULT NULL,
    `token` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `validity` datetime(6) DEFAULT NULL,
    `user_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `FK1bi1pmqjgipw7dx3j6bl37dja` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

CREATE TABLE IF NOT EXISTS `user` (
    `id` int(11) NOT NULL,
    `birthdate` date DEFAULT NULL,
    `city` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `country` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `email` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `genpoint` int(11) NOT NULL,
    `house_number` int(11) NOT NULL,
    `isadmin` bit(1) NOT NULL,
    `isregistered` bit(1) NOT NULL,
    `password` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `real_name` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `salt` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `sex` int(11) NOT NULL,
    `street` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `username` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
    `zip_code` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

ALTER TABLE `buy`
    ADD CONSTRAINT `FKcbwqahvf52blwmv5p0ulnpqgt` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FKkhggp13kai501c16q0o3xt1ap` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `credit_card`
    ADD CONSTRAINT `FKh4wi9724muee2kp2c4ku1yia2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `new_password_token`
    ADD CONSTRAINT `FK42mia7pk06rdodfhv13i16w1k` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `rating`
    ADD CONSTRAINT `FKlkuwie0au2dru36asng9nywmh` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FKpn05vbx6usw0c65tcyuce4dw5` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `session`
    ADD CONSTRAINT `FK1bi1pmqjgipw7dx3j6bl37dja` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;
