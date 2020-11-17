CREATE TABLE `booking`
(
    `id`     int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `cid`    int(11)             NOT NULL,
    `status` ENUM ('PENDING', 'CONFIRMED', 'CANCELLED') DEFAULT 'PENDING',
    `numberOfRooms`  int(5)                               DEFAULT '1'
);

CREATE TABLE `customer`
(
    `cid`      int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,	
    `fullname` varchar(100)        NOT NULL,
    `age` varchar(10)        NOT NULL,
    `email`    varchar(50)         NOT NULL,
    `password` varchar(150)        NOT NULL,
    `cardNumber`      int(16) DEFAULT NULL,
    `phone`    varchar(25) DEFAULT NULL
);

CREATE TABLE `pricing`
(
    `pricing_id`  int(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `booking_id`  int(6) NOT NULL,
    `nights`      int(2) NOT NULL,
    `total_price` double  NOT NULL,
    `booked_date` DATE NOT NULL
);

CREATE TABLE administrator
(
    `adminId`  INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `fullname` VARCHAR(100) DEFAULT NULL,
    `password` VARCHAR(100)    NOT NULL,
    `email`    VARCHAR(30)     NOT NULL UNIQUE,
);

CREATE TABLE `reservation`
(
    `id`          int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `checkin`       varchar(30)         NOT NULL,
    `checkout`         varchar(30)         NOT NULL,
    `type`        ENUM ('Single', 'Double', 'Deluxe', 'Suite')              DEFAULT 'Single',
    `adults`      int(2)              NOT NULL,
    `children`    int(2)                                           DEFAULT '0',
    `requests`    varchar(500)                                     DEFAULT NULL,
    `timestamp`   timestamp           NOT NULL                     DEFAULT CURRENT_TIMESTAMP,                                  DEFAULT NULL
);

# Constraints
--
ALTER TABLE `booking`
    ADD CONSTRAINT `booking_customer__fk` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
    ADD CONSTRAINT `reservation_booking__fk` FOREIGN KEY (`id`) REFERENCES `booking` (`id`) ON DELETE CASCADE;


ALTER TABLE `pricing`
    ADD CONSTRAINT `pricing_booking__fk` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE;