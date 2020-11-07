<?php

    //File is meant for generating the database required for website in sql

    //login info for mysql
    require_once "../constants.php";


    //sql connection
    $conn = new mysqli($servername , $username , $password);
    if(!$conn) {
        die("[-] CONNECTION ERROR -> mysql");
    }

    $sql = "create database $hotel";
    if(!mysqli_query($conn, $sql)){
        die("database creation/connection error");
    }

    //using the database

    $sql = "use database hotel";
    if(!mysqli_query($conn, $sql)){
        die("database use error");
    }
    //creating tables;

    $sql = "create table rooms(room_no int, type varchar, occupancy int, is_occupied int, floor int, price int, image varchar)";
    if(!mysqli_query($conn, $sql)){
        die("rooms table creation error");
    }
    
    $sql = "create table customers(cust_id primary key serial, name varchar, age varchar, request_type varchar, request_floor int, checkout_amount int, phone_no varchar address varchar);"
    if(!mysqli_query($conn, $sql)){
        die("customers table creation error");
    }


    $sql = "create table booking(booking_id primary key serial, cust_id int, room_no int, no_days int,arrival date, check_in time, check_out time,  amount_paid int);"
    if(!mysqli_query($conn, $sql)){
        die("booking table creation error");
    }
        
    die("DATABASE INSTALLATION SUCCESSFUL !!");
    

?>
