<?php 
$host = "localhost";
$port = "5432";
$dbname = "hotel";
$user = "postgres";
$pass = "123";

$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if(!$con) {
      echo "Error : Unable to open database\n";
      die ("Could not connect to server\n");
   } 
else {
      echo "Opened database successfully\n";
     
   }


// $query = "DROP table customer CASCADE";
// pg_query($con, $query) or die("Cannot execute query: $query\n");

// $query = "CREATE SCHEMA customer";
// pg_query($con, $query) or die("Cannot execute query: $query\n");

$sql =<<<EOF
      drop table customer cascade;
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table dropped successfully\n";
   }

$sql =<<<EOF
      drop table booking cascade;
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table dropped successfully\n";
   }

$sql =<<<EOF
      drop table pricing cascade;
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table dropped successfully\n";
   }

$sql =<<<EOF
      drop table reservation cascade;
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table dropped successfully\n";
   }

$sql =<<<EOF
      drop table administrator cascade;
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table dropped successfully\n";
   }

$query = "DROP TABLE IF EXISTS BOOKING"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 


$sql =<<<EOF
      CREATE TABLE BOOKING
      (ID SERIAL PRIMARY KEY     NOT NULL,
      CID INT NOT NULL,
      STATUS VARCHAR NOT NULL DEFAULT 'PENDING',
      NUMBEROFROOMS INT DEFAULT 1 );
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table created successfully\n";
   }


$query = "DROP TABLE IF EXISTS CUSTOMER"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$sql =<<<EOF
      CREATE TABLE CUSTOMER (
    CID SERIAL PRIMARY KEY NOT NULL ,
    FULLNAME VARCHAR NOT NULL,
    AGE INT,
    EMAIL VARCHAR NOT NULL,
    PASSWORD VARCHAR NOT NULL,
    CARDNUMBER VARCHAR DEFAULT NULL,
    PHONE VARCHAR DEFAULT NULL);
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table created successfully\n";
   }


$query = "DROP TABLE IF EXISTS PRICING"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$sql =<<<EOF
      CREATE TABLE PRICING (
    PRICING_ID SERIAL PRIMARY KEY NOT NULL,
    BOOKING_ID INT NOT NULL,
    NIGHTS INT NOT NULL,
    TOTAL_PRICE DECIMAL NOT NULL DEFAULT 0,
    BOOKED_DATE DATE NOT NULL);
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table created successfully\n";
   }


$query = "DROP TABLE IF EXISTS ADMINISTRATOR"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$sql =<<<EOF
     CREATE TABLE ADMINISTRATOR (
    ADMIN_ID SERIAL PRIMARY KEY NOT NULL ,
    FULLNAME VARCHAR DEFAULT NULL,
    PASSWORD VARCHAR NOT NULL,
    EMAIL VARCHAR NOT NULL);
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table created successfully\n";
   }


$query = "DROP TABLE IF EXISTS RESERVATION"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$sql =<<<EOF
     CREATE TABLE RESERVATION (
    ID SERIAL PRIMARY KEY NOT NULL ,
    CHECKIN DATE NOT NULL DEFAULT NULL,
    CHECKOUT DATE NOT NULL,
    TYPE VARCHAR NOT NULL DEFAULT 'SINGLE',
    ADULTS INT NOT NULL,
    CHILDREN INT DEFAULT 0,
    REQUESTS VARCHAR DEFAULT NULL,
    TIME_RECORD TIMESTAMP);
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "Table created successfully\n";
   }

$query = "ALTER TABLE BOOKING
    ADD CONSTRAINT booking_customer__fk FOREIGN KEY (cid) REFERENCES customer (cid) ON DELETE CASCADE";
pg_query($con, $query) or die("Cannot execute query: $query\n");  

$query = "ALTER TABLE RESERVATION
    ADD CONSTRAINT reservation_booking__fk FOREIGN KEY (id) REFERENCES booking (id) ON DELETE CASCADE";
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

$query = "ALTER TABLE PRICING
    ADD CONSTRAINT pricing_booking__fk FOREIGN KEY (booking_id) REFERENCES booking (id) ON DELETE CASCADE";
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

pg_close($con); 

?>