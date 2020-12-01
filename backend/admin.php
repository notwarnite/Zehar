<?php 

$host = "localhost";
$port = "5432";
$dbname = "hotel";
$user = "postgres";
$pass = "123";

$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if(!$con) {
      echo nl2br("Error : Unable to open database");
      die ("Could not connect to server\n");
   } 
else {
      echo "Opened database successfully\n";
     
   }

$query = "select count(id) from booking;"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "Total number of booking: $row[0] \n";
}

$query = "select count(cid) from customer;"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "Total number of customers: $row[0] \n";
}

// header('Location:./../frontend/admin.php');      

?> 