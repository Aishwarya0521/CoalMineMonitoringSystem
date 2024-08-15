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

/*
$sql = "SELECT * FROM ind ORDER BY sno DESC LIMIT 10";
  */
/*
$result = mysqli_query($conection_db,$sql)
  or die("Invalid query: ".mysqli_error($conection_db));
*/

    $stmt = mysqli_prepare($conection_db, "SELECT date_format(dt, '%d-%b-%Y %H:%i:%S') as pDate,  t as T, h as H,  ch4 as CH4 FROM mine GROUP BY dt DESC LIMIT 5 ");
    $result = array('day' => array(), 't' => array(), 'h' => array(), 'co' => array(), 'co2' => array(), 'ch4' => array(), 'd' => array());
    if ($stmt) {
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $day, $t, $h, $ch4);
        while (mysqli_stmt_fetch($stmt)) {
             $result['day'][] = $day;
             $result['t'][] = $t;
             $result['h'][] = $h;
             $result['ch4'][] = $ch4;
             
                    
             
        }
        mysqli_stmt_close($stmt);
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Charts</title>
    <meta http-equiv="refresh" content="30" > 
   <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
  <!--   morris css 
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">-->
  
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">



</head>

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
                   
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item ">
                        <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                 
                  
                    <li data-username="Charts Morris" class="nav-item active"><a href="charts.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item ">
                        <a href="tables.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Table</span></a>
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
            <div >
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
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Charts</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Chart</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ Morris Chart ] start -->
                               
                                    
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>COAL MINE MONITORING USING IOT</h5>
                                        </div>
                                        <div class="card-block">
                                           <div id="div-chart1" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; " ></div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Temperature Parameter</h5>
                                        </div>
                                        <div class="card-block">
                                           <div id="div-chart2" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; " ></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Humidity Parameter</h5>
                                        </div>
                                        <div class="card-block">
                                           <div id="div-chart3" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; " ></div>
                                        </div>
                                    </div>
                                </div>


                                
                                  <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>CH4 Gas Parameter</h5>
                                        </div>
                                        <div class="card-block">
                                           <div id="div-chart6" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; " ></div>
                                        </div>
                                    </div>
                                </div>

                                

                                
                                <!-- [ Morris Chart ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


    <!-- chart-morris Js -->

  <!--   
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
<script src="assets/js/highcharts.js"></script>


<script src="https://code.highcharts.com/modules/data.js"></script>
    <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

    <script src="https://code.highcharts.com/modules/exporting.src.js"></script>
<script src="https://highcharts.github.io/export-csv/export-csv.js"></script>




    <script>
        $(function () {
            $('#div-chart1').highcharts({


                chart: {
                 // zoomType: 'x'
                  type:'spline'
                },
                title: {
                    text: 'Environment Monitoring In Factories'
                },
                subtitle: {
                  //  text: 'www.embeddedlabs.com'
                },
                xAxis: {
                    categories: <?php echo json_encode($result['day']) ?>,
                    crosshair: true
                },

                yAxis: {
            title: {
                text: 'VALUES'
            }
        },  
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },

                     spline: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        },
                },

                tooltip: {
        shared: true,
          crosshairs: true
    },
                series: [
                        {
                    name: 'Temperature',
                    data: <?php echo json_encode($result['t']) ?>,
                  
                  //  yaxis: 1,
                    tooltip: {
            valueSuffix: ' °C'
        },
                },
                        {
                    name: 'Humidity',
                    data: <?php echo json_encode($result['h']) ?>,
                  
                  //  yaxis: 2,
                    tooltip: {

            valueSuffix: ' %'
        },
                },

                       


                   {
                    name: 'CH4 Gas',
                    data: <?php echo json_encode($result['ch4']) ?>,
                  
                  //  yaxis: 2,
                    tooltip: {

            valueSuffix: ' ppm'
        },
                },


              
            

                ]
            });
        });


        $(function () {
            $('#div-chart2').highcharts({
                chart: {
                 // zoomType: 'x'
                  type:'line'
                },
                title: {
                    text: 'Temperature'
                },
                subtitle: {
                   // text: 'www.embeddedlabs.com'
                },
                xAxis: {
                    categories: <?php echo json_encode($result['day']) ?>,
                    crosshair: true
                },

                yAxis: {
            title: {
                text: ' °C'
            }
        },  
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },

                     spline: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        },
                },

                tooltip: {
        shared: true
    },
                series: [{
                    name: 'Temp',
                    data: <?php echo json_encode($result['t']) ?>,

                     tooltip: {
            valueSuffix: ' °C'
        },
                },
                        
        

               

                ]
            });
        });



        

        $(function () {
            $('#div-chart3').highcharts({
                chart: {
                 // zoomType: 'x'
                  type:'line'
                },
                title: {
                    text: 'Humidity'
                },
                subtitle: {
                   // text: 'www.embeddedlabs.com'
                },
                xAxis: {
                    categories: <?php echo json_encode($result['day']) ?>,
                    crosshair: true
                },

                yAxis: {
            title: {
                text: ' %'
            }
        },  
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },

                     spline: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        },
                },

                tooltip: {
        shared: true
    },
                series: [{
                    name: 'Humidity',
                    data: <?php echo json_encode($result['h']) ?>,

                     tooltip: {
            valueSuffix: ' %'
        },
                },
                        
             

                ]
            });
        });







        $(function () {
            $('#div-chart6').highcharts({
                chart: {
                 // zoomType: 'x'
                  type:'line'
                },
                title: {
                    text: 'CH4 Gas'
                },
                subtitle: {
                   // text: 'www.embeddedlabs.com'
                },
                xAxis: {
                    categories: <?php echo json_encode($result['day']) ?>,
                    crosshair: true
                },

                yAxis: {
            title: {
                text: ' ppm'
            }
        },  
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },

                     spline: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        },
                },

                tooltip: {
        shared: true
    },
                series: [{
                    name: 'CH4 Gas',
                    data: <?php echo json_encode($result['ch4']) ?>,

                     tooltip: {
            valueSuffix: ' ppm'
        },
                },
                        
        

               

                ]
            });
        });



      




    </script>

 <!-- 
<div id="div-chart1" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; " ></div>
<div id="div-chart2" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; "></div>
<div id="div-chart3" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; "></div>
<div id="div-chart4" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; "></div>
<div id="div-chart5" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; "></div>
<div id="div-chart6" style="width: 600px; height: 400px; position:relative;float:left;margin:15px auto; "></div>


 -->
</body>
</html>

