<?php 

$host = "localhost:8000"; 
$user = "root"; 
$pass = ""; 
$db = "hotel"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "DROP TABLE IF EXISTS booking"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$query = "CREATE TABLE booking (
    id INT(11) NOT NULL AUTO_INCREMENT,
    cid INT(11) NOT NULL,
    status ENUM (PENDING, CONFIRMED, CANCELLED) NOT NULL DEFAULT Pending,
    numberOfRooms INT(5) DEFAULT 1,
    PRIMARY KEY (id)
    )";
pg_query($con, $query) or die("Cannot execute query: $query\n");

$query = "CREATE TABLE customer (
    cid INT(11) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    age VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    cardNumber INT(16) DEFAULT NULL,
    phone VARCHAR(25) DEFAULT NULL,
    PRIMARY KEY (cid)
    )";
pg_query($con, $query) or die("Cannot execute query: $query\n");  

$query = "CREATE TABLE pricing (
    pricing_id INT(6) NOT NULL AUTO_INCREMENT,
    booking_id INT(6) NOT NULL,
    nights INT(4) NOT NULL,
    total_price DOUBLE NOT NULL DEFAULT 0,
    booked_date DATE NOT NULL,
    PRIMARY KEY (pricing_id)
    )";
pg_query($con, $query) or die("Cannot execute query: $query\n");  

$query = "CREATE TABLE administrator (
    admin_Id INT(10) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(100) DEFAULT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(30) NOT NULL,
    PRIMARY KEY (admin_Id)
    )";
pg_query($con, $query) or die("Cannot execute query: $query\n");  

$query = "CREATE TABLE reservation (
    id INT(11) NOT NULL AUTO_INCREMENT,
    checkin DATE NOT NULL DEFAULT NULL,
    checkout DATE NOT NULL,
    type ENUM (Single, Double, Deluxe, Suite) NOT NULL DEFAULT Single,
    adults INT(6) NOT NULL,
    children INT(6) DEFAULT 0,
    requests VARCHAR(500) DEFAULT NULL,
    timestamp TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
    )";
pg_query($con, $query) or die("Cannot execute query: $query\n");  

$query = "ALTER TABLE booking
    ADD CONSTRAINT booking_customer__fk FOREIGN KEY (cid) REFERENCES customer (cid) ON DELETE CASCADE";
pg_query($con, $query) or die("Cannot execute query: $query\n");  

$query = "ALTER TABLE reservation
    ADD CONSTRAINT reservation_booking__fk FOREIGN KEY (id) REFERENCES booking (id) ON DELETE CASCADE";
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$query = "ALTER TABLE pricing
    ADD CONSTRAINT pricing_booking__fk FOREIGN KEY (booking_id) REFERENCES booking (id) ON DELETE CASCADE";
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

pg_close($con); 

?>