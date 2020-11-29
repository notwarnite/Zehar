<?php 
//Initializing the session 
session_start(); 
      

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

$sql =<<<EOF
      select cid from customer where email = " . $_SESSION['email_address'] . " and password = " . $_SESSION['password'] . ";
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "User exists. \n";
      header('Location: home.php');
   }  

    ?> 