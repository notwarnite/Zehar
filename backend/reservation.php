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

$sql =<<<EOF
      INSERT INTO reservation (CHECKIN, CHECKOUT, TYPE, ADULTS, CHILDREN, REQUESTS) VALUES (" . $_POST['checkin']. "," . $_POST['checkout']. " , " . $_POST['type']. ", " . $_POST['adults']. ", " . $_POST['children']. ", " . $_POST['requests']. ");
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "User details added. \n";
      // header('Location: login.php');
   }  

?> 