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

$query = "select rooms_booked from rooms where room_type =  " . $_POST['room_type']. ""; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

$row = pg_fetch_row($rs);

$inc_room = $row[0] + 1;

// echo $inc_room ;

$query = "update rooms set rooms_booked = $inc_room where room_type =  " . $_POST['room_type']. ";"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");


$query = "select id from booking where cid = $ci;"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

$row = pg_fetch_row($rs);

$bi = $row[0];

$sql =<<<EOF
      INSERT INTO pricing (booking_id, nights, total_price, booked_date) VALUES ($bi ,  " . $_POST['nights']. ", " . $_POST['total_price']. ", " . $_POST['booked_date']. ");
EOF;

   $ret = pg_query($con, $sql);
   if(!$ret) {
      echo pg_last_error($con);
   } else {
      echo "User details added. \n";
      // header('Location: login.php');
   } 

// header('Location:./../frontend/admin.php');   

// header('Location:./../frontend/admin.php');      

?> 