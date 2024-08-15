<?php

require_once "config.php"; //Connect to Database

$deleterecords = "TRUNCATE TABLE mine"; //empty the table of its current records
mysqli_query( $conection_db, $deleterecords );

?>