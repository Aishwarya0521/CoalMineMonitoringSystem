<?php
require_once "config.php";


    $t = $_GET['t'];
    $h = $_GET['h'];
   
    $ch4 = $_GET['ch4'];

   


// Insert these values if none have been passed

if (!$t) {
  $t = 0;
}

if (!$h) {
  $h = 0;
}


if (!$ch4) {
  $ch4 = 0;
}




$now = new DateTime(null, new DateTimezone('GMT+5:30'));
$datenow = $now->format("Y-m-d H:i:s");

$sql = "INSERT INTO mine ( t, h, ch4,  dt) VALUES ( '$t', '$h', '$ch4', '$datenow')";
$result = mysqli_query($conection_db,$sql)
  or die("Invalid query: ".mysqli_error($conection_db));
  
echo "<h2>The Field and Value data have been sent</h2>";

mysqli_close($con);
?>

