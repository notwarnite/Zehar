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


$query = "select cid from customer where name = " . $_POST['name']. ";"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

$row = pg_fetch_row($rs);

$ci = $row[0];

$sql =<<<EOF
      INSERT INTO booking (cid, status, roomtype, no_of_rooms) VALUES ($ci , "confirmed", " . $_POST['room_type']. ", " . $_POST['number_of_rooms']. ");
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "User details added. \n";
      // header('Location: login.php');
   }  

// header('Location:./../frontend/admin.php');      

?> 