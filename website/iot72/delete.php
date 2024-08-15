 <?php
require_once "config.php";
// sql to delete a record
$sql = "DELETE FROM mine WHERE sno";

if (mysqli_query($conection_db, $sql)) 
{
  //  echo "Record deleted successfully";
	require 'truncate.php';
   echo "Records Clr successfully.";
    header("Location: ../iot72/tables.php");
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conection_db);
}

mysqli_close($conection_db);
?> 