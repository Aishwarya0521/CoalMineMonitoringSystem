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


$sql = "SELECT * FROM mine ORDER BY sno DESC LIMIT 1";
  

$result = mysqli_query($conection_db,$sql)
  or die("Invalid query: ".mysqli_error($conection_db));

$num_rows = mysqli_num_rows($result);  
if ($num_rows > 0) {  
  while ($row = mysqli_fetch_assoc($result)) {  
  //   echo ("#");
  //  echo $row['balance_amount'];
  //echo ("*");
 $t =  $row['t'];
 $h =  $row['h'];
 $ch4 =  $row['ch4'];
 $dt = $row['dt'];
/*echo $t;
echo $h;
echo $co;
echo $d;
echo $co2;
echo $ch4;*/

  }  
  
  }

 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title> COAL MINE MONITORING USING IOT </title>
    <meta http-equiv="refresh" content="30" > 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">


   

</head>
<style >
    

.center {
  text-align: center;
  border: 3px solid green;
}

</style>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="dashboard.php" class="b-brand">
                    <div class="b-bg">
                        <img class="rounded-circle" style="width:40px;" src="assets/images/favicon.ico" alt="activity-user">
                    </div>
                    <span class="b-title">COAL MINE MONI.</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                   
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                 
                  
                    <li data-username="Charts Morris" class="nav-item"><a href="charts.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Charts</span></a></li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="tables.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Tables</span></a>
                    </li>
                    <li data-username="Logout" class="nav-item"><a href="logout.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light card-header">
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            </ul>
            <div>          
                <h3> COAL MINE MONITORING USING IOT </h3>  
            </div> 
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>admin</span>
                                <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="reset_password.php" class="dropdown-item"><i class="feather icon-lock"></i> Change Password</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">

                    <!-- [ breadcrumb ] start -->

                     <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                 <!-- [ badge ] start -->
                                <div class="col-sm-12">
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Alerts & Warnings</h5>
                                        </div>
                                            <div class="card-body">
                                        
                                    

                                        <?php


                                         $tl=34; $hl=50; $hh=70;  $ch4l=1000; 



                                       if ($t > $tl) { echo "<button type='button' class='btn btn-danger' style='font-size: 25px;'>Temperature - " . $t . " °C <span class='badge badge-light feather icon-trending-up text-c-red f-30 m-r-10'><i></i></span></button>"; }           
                                       else{
                                         echo "<button type='button' class='btn btn-success' style='font-size: 25px;'>Temperature - " . $t . " °C <span class='badge badge-light feather icon-check-square text-c-green f-30 m-r-10'><i></i></span></button>";
                                       }

                                        if ($h > $hh) { echo "<button type='button' class='btn btn-danger' style='font-size: 25px;'>Humidity - " . $h . " % <span class='badge badge-light feather icon-trending-up text-c-red f-30 m-r-10'><i></i></span></button>"; }           
                                       else if($h < $hl){
                                         echo "<button type='button' class='btn btn-info' style='font-size: 25px;'>Humidity - " . $h . " % <span class='badge badge-light feather icon-trending-down text-c-blue f-30 m-r-10'><i></i></span></button>";
                                       }
                                       else if($h >= $hl && $h <= $hh){
                                         echo "<button type='button' class='btn btn-success' style='font-size: 25px;'>Humidity - " . $h . " % <span class='badge badge-light feather icon-check-square text-c-green f-30 m-r-10'><i></i></span></button>";
                                       }
                                       else;

                                    

                                         if ($ch4 > $ch4l) { echo "<button type='button' class='btn btn-danger' style='font-size: 25px;'>CH4 Gas - " . $ch4 . " ppm <span class='badge badge-light feather icon-trending-up text-c-red f-30 m-r-10'><i></i></span></button>"; }           
                                       else{
                                         echo "<button type='button' class='btn btn-success' style='font-size: 25px;'>CH4 Gas - " . $ch4 . " ppm <span class='badge badge-light feather icon-check-square text-c-green f-30 m-r-10'><i></i></span></button>";
                                       }

                                     
                                       

                                  
                                        ?>




                                      <!--      <button type="button" class="btn btn-danger"  style=" font-size: 25px;">Temperature - <?php echo $t; ?> °C <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span> </button>
                                   
                                            <button type="button" class="btn btn-warning"  style=" font-size: 25px;">Humidity - <?php echo $h; ?> % <span class="badge badge-light feather icon-activity text-c-yellow f-30 m-r-10"><i></i></span></button>
                                               
                                            <button type="button" class="btn btn-danger"  style=" font-size: 25px;">Amine Gas - <?php echo $a; ?> ppm <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span></button> 

                                            <button type="button" class="btn btn-info"  style=" font-size: 25px;">Dust Particles - <?php echo $d; ?> µm <span class="badge badge-light feather icon-trending-down text-c-blue f-30 m-r-10"><i></i></span></button> 

                                            <button type="button" class="btn btn-success"  style=" font-size: 25px;">Noise - <?php echo $n; ?> dB <span class="badge badge-light feather icon-check-square text-c-green f-30 m-r-10"><i></i></span></button>-->

                                            </div>




                                       <!--  <div class="card-header">
                                            <h5>Details</h5>
                                        </div>
                                    -->
                                        <div class="card-body">
                                            <span class="badge badge-light feather icon-circle text-c-red f-20 m-r-10"><i style=" color:black;  "> - Danger;</i></span>
                                       <!--      <span class="badge badge-light feather icon-circle text-c-yellow f-20 m-r-10"><i style=" color:black;"> - Warning;</i></span> -->
                                             <span class="badge badge-light feather icon-circle text-c-green f-20 m-r-10"><i style=" color:black;"> - Safe;</i></span>
                                            <span class="badge badge-light feather icon-circle text-c-blue f-20 m-r-10"><i style=" color:black;"> - Low;</i></span>
                                           
                                        </div> 
                                      <!--   <div class="card-header">
                                            <h5>Symbol Details</h5>
                                        </div>
                                         <div class="card-body">
                                            <span class="badge badge-light feather icon-trending-up text-c-black f-20 m-r-10"><i style=" color:black;"> - Very High;</i></span>
                                            <span class="badge badge-light feather icon-activity text-c-black f-20 m-r-10"><i style=" color:black;"> - High;</i></span>
                                               <span class="badge badge-light feather icon-check-square text-c-black f-20 m-r-10"><i style=" color:black;"> - Safe;</i></span>
                                            <span class="badge badge-light feather icon-trending-down text-c-black f-20 m-r-10"><i style=" color:black;"> - Low;</i></span>
                                         -->
                                        <!--

                                            <button type="button" class="btn btn-primary">primary <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-secondary">secondary <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-success">success <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-danger">danger <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-warning">warning <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-info">info <span class="badge badge-light">4</span></button>
                                        
                                        

                                        </div>-->
                                    </div>
                                </div>
                                <!-- [ badge ] end -->
                                <div class="row">
                                <!-- [ badge ] start -->
                                <div class="col-sm-12">
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Parameters Check</h5>
                                        </div>
                                          <!--  <div class="card-body">
                                         
                                            <button type="button" class="btn btn-secondary"  style=" font-size: 25px;">Temperature <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span> </button>
                                            <button type="button" class="btn btn-secondary"  style=" font-size: 25px;">Humidity <span class="badge badge-light feather icon-activity text-c-yellow f-30 m-r-10"><i></i></span></button>
                                            <button type="button" class="btn btn-secondary"  style=" font-size: 25px;">Amine Gas <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span></button>
                                            <button type="button" class="btn btn-secondary"  style=" font-size: 25px;">Dust Particles <span class="badge badge-light feather icon-trending-down text-c-green f-30 m-r-10"><i></i></span></button>
                                            <button type="button" class="btn btn-secondary"  style=" font-size: 25px;">Noise <span class="badge badge-light feather icon-check-square text-c-blue f-30 m-r-10"><i></i></span></button>
                                        -->
    
                                        <!--

                                            <button type="button" class="btn btn-primary">primary <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-secondary">secondary <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-success">success <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-danger">danger <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-warning">warning <span class="badge badge-light">4</span></button>
                                            <button type="button" class="btn btn-info">info <span class="badge badge-light">4</span></button>
                                        
                                        

                                        </div>-->
                                    </div>
                                </div>
                                <!-- [ badge ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>

                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                             
                              

                                <!--[Parameter section] start-->
                                <!-- temperature -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card ">
                                      <!--    <button type="button" class="btnn btn-secondary"  style=" font-size: 25px;">Temperature <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span> </button> -->
                                             <button type="button" class="btnn btn-secondary"  style=" font-size: 25px;">Temperature  </button>
                                       
                                        <div class="card-block border-bottom">
                                            
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-auto card-social">
                                                   <!-- <i class="fab fa-facebook-f text-primary f-36"></i> -->
                                                  <i class="fas fa-thermometer-half text-c-orange f-50"></i>
                                                 
                                                </div>
                                                <div class="col text-right">
                                                    <h3><?php echo $t; ?> °C </h3>
                                                   <h5 class="text-c-green mb-0"> <span class="text-muted">Temperature</span></h5> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center card-active">
                                             <!--    <div class="col-6">
                                                   <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span>
                                                </div>  -->
                                                <div class="col-6">
                                                    <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Last:</span><?php echo $dt; ?></h6>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-c-purple" role="progressbar" style="width:100%;height:6px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- humidity -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card ">
                                        <!--  <button type="button" class="btnn btn-secondary"  style=" font-size: 25px;">Humidity <span class="badge badge-light feather icon-activity text-c-yellow f-30 m-r-10"><i></i></span></button> -->
                                             <button type="button" class="btnn btn-secondary"  style=" font-size: 25px;">Humidity </button>
                                        <div class="card-block border-bottom">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-auto card-social">
                                                    <i class="fas fa-tint text-c-blue f-50"></i>
                                                </div>
                                                <div class="col text-right">
                                                    <h3><?php echo $h; ?> %</h3>
                                                    <h5 class="text-c-purple mb-0"><span class="text-muted">Humidity</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center card-active">
                                                
                                                <div class="col-6">
                                                    <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Last:</span><?php echo $dt; ?></h6>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-c-purple" role="progressbar" style="width:100%;height:6px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                                 <!-- CH4 Gas -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card ">
                                        <!--  <button type="button" class="btnn btn-secondary"  style=" font-size: 25px;">Amine Gas <span class="badge badge-light feather icon-trending-up text-c-red f-30 m-r-10"><i></i></span></button> -->
                                                 <button type="button" class="btnn btn-secondary"  style=" font-size: 25px;">CH4 Gas </button>
                                        <div class="card-block border-bottom">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-auto card-social">
                                                    <i class="fa fa-tachometer text-c-purple f-50"></i>
                                                </div>
                                                <div class="col text-right">
                                                    <h3><?php echo $ch4; ?> ppm</h3>
                                                    <h5 class="text-c-blue mb-0"><span class="text-muted">CH4 Gas</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center card-active">
                                                
                                                <div class="col-6">
                                                    <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Last:</span><?php echo $dt; ?></h6>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-c-purple" role="progressbar" style="width:100%;height:6px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                               
                             
                                <!--[section] end-->

        

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


</body>
</html>
