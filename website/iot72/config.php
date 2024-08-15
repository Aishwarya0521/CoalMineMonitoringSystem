
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql.hostinger.in');
define('DB_USERNAME', 'u514009788_24_iot72');
define('DB_PASSWORD', 'QwertyuioP!72');
define('DB_NAME', 'u514009788_24_iot72');
 
/* Attempt to connect to MySQL database */
$conection_db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conection_db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>