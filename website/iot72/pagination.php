
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

// Include config file
require_once "config.php";

$limit = 10;  $i=0;

if (isset($_GET["page"])) { $page_number  = $_GET["page"]; } else { $page_number=1; };  

$initial_page = ($page_number-1) * $limit;  

//$sql = "SELECT * FROM ind ORDER BY sno DESC LIMIT $initial_page, $limit";  
$sql = "SELECT * FROM mine ORDER BY sno DESC LIMIT $initial_page, $limit";  

$result = mysqli_query($conection_db, $sql);  


?>

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>                                   
                                                            <th>#</th>
                                                            <th>Date / Time</th>
                                                            <th>Temperature (°C)</th>
                                                            <th>Humidity (%)</th>
                                                            <th>CH4 (ppm)</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php  

                                                        while ($row = mysqli_fetch_array($result)) {  
                                                            $i++;
                                                        ?>  

                                                                    <tr>    

                                                                <!--    <td><?php echo $i; ?></td>  -->
                                                                  <td><?php echo $row["sno"]; ?></td>
                                                                    <td><?php echo $row["dt"]; ?></td>
                                                                    <td><?php echo $row["t"]; ?></td>
                                                                    <td><?php echo $row["h"]; ?></td>
                                                                    <td><?php echo $row["ch4"]; ?></td>

                                                                    </tr>  

                                                        <?php  

                                                        };  

                                                        ?>  

                                                        
                                                    </tbody>
                                                </table>