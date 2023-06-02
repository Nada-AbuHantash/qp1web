<?php
session_start();

$markt=$_SESSION['admin'];
 

    try{
        $db=new mysqli('localhost', 'root', '', 'gp01');
        
        $data=[];
        $namedata=[];
        $qryStr = "SELECT * FROM products ";
        $res = $db->query($qryStr);
        while ($row = $res->fetch_assoc()) {

          
             $buy=$row['Sold'];
$initcount=$row['productcount'];
$per=$row['percent'];
$nn=($buy-$initcount)*$per;
           $data[]=$nn;

          
           $namedata[]=$row['productname'];
        $su[]=$row['namesupermarket'] . ',' . $row['productname'];
        }
        //  echo json_encode($namedata);
    }catch (Exception $e){
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SALE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    @import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
    .rwd-table {
        margin: 1em 0;
        min-width: 300px;
    }
    .rwd-table tr {
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }
    .rwd-table th {
        display: none;
    }
    .rwd-table td {
        display: block;
    }
    .rwd-table td:first-child {
        padding-top: .5em;
    }
    .rwd-table td:last-child {
        padding-bottom: .5em;
    }
    .rwd-table td:before {
        content: attr(data-th) ": ";
        font-weight: bold;
        width: 6.5em;
        display: inline-block;
    }
    @media (min-width: 480px) {
        .rwd-table td:before {
            display: none;
        }
    }
    .rwd-table th, .rwd-table td {
        text-align: left;
    }
    @media (min-width: 480px) {
        .rwd-table th, .rwd-table td {
            display: table-cell;
            padding: .25em .5em;
        }
        .rwd-table th:first-child, .rwd-table td:first-child {
            padding-left: 0;
        }
        .rwd-table th:last-child, .rwd-table td:last-child {
            padding-right: 0;
        }
    }

    body {
        padding: 0 2em;
        font-family: Montserrat, sans-serif;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        color: #444;
        background: #eee;
    }

    h1 {
        font-weight: normal;
        letter-spacing: -1px;
        color: #A8D8CD;
    }

    .rwd-table {
        background: #A8D8CD;
        color: #205C8F;
        border-radius: .4em;
        overflow: hidden;
    }
    .rwd-table tr {
        border-color: #205C8F;
    }
    .rwd-table th, .rwd-table td {
        margin: .5em 1em;
    }
    @media (min-width: 480px) {
        .rwd-table th, .rwd-table td {
            padding: 1em !important;
        }
    }
    .rwd-table th, .rwd-table td:before {
        color: #205C8F;
    }

</style>
<body>
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="adminhome.php" class="logo d-flex align-items-center">
    <img src="assets/images/logoo1.png" alt="">
    <span class="d-none d-lg-block">SALE</span>
  </a>
  <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
</div><!-- End Logo -->

</header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="adminhome.php">
          <i class="bi bi-grid"></i>
          <span>home</span>
        </a>
        
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Requests</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
            <a href="adminhome.php" >
              <i class="bi bi-circle"></i><span>Seller</span>
            </a>
          </li>
          <li>
            <a href="delreq.php">
              <i class="bi bi-circle"></i><span>Delivery</span>
            </a>
          </li>
</ul>
        

      <li class="nav-item">
      <a class="nav-link collapsed" href="all.php">
            <span>
          <i class="bi bi-card-list"></i></span><span>Users</span>
        </a>
        
      </li><!-- End Tables Nav -->
      </li><!-- End Tables Nav -->
      <li class="nav-item">
      <a class="nav-link collapsed" href="feed.php">
            <span>
          <i class="bi bi-journal-text"></i></span><span>Feed back</span>
        </a>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Profit</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="selprf.php" class="active">
              <i class="bi bi-circle"></i><span>Seller</span>
            </a>
          </li>
          <li>
            <a href="delprof.php">
              <i class="bi bi-circle"></i><span>Delivrey</span>
            </a>
          </li>
          <!-- <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li> -->
        </ul>
      </li><!-- End Charts Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
            <span>
          <i class="bi bi-box-arrow-in-right"></i></span>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->



  <main id="main">


           <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

           <section class="section">
      <div class="row">

      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PRODECT AT SUPERMARKET</h5>

              <!-- Line Chart -->
              <canvas id="lineChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
     
                   new Chart(document.querySelector('#lineChart'), {
                    type: 'line',
                    data: {
                      labels: <?php echo json_encode($su); ?>,
                      datasets: [{
                        label: 'profit from sold',
                        data: <?php echo json_encode($data); ?>,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Line CHart -->

            </div>
          </div>
        </div>

      


        <div>
<h4 class="card-title" >These are the profits of each of the supermarkets</h4>        
            </div>


<div class="col-lg-6 ">
          <div class="card ">
            <div class="card-body ">
              <h5 class="card-title ">Bravo Mall </h5>
            
              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    <?php
 

    try{
        $db=new mysqli('localhost', 'root', '', 'gp01');
      
        $data=[];
        $namedata=[];
        $qryStr = "SELECT * FROM products WHERE namesupermarket='Bravo Mall'";
        $res = $db->query($qryStr);
        while ($row = $res->fetch_assoc()) {

          
             $buy=$row['Sold'];
$initcount=$row['productcount'];
$per=$row['newprice'];



$pp=$row['percent'];

$n=($buy-$initcount)*$pp;

$data[]=$n;
           $namedata[]=$row['productname'];
        
        }
         echo json_encode($namedata);
    }catch (Exception $e){
    }

?>


                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels:<?php echo json_encode($namedata); ?>,
                    //    ["January", 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'profit from sold out',
                        data: <?php echo json_encode($data); ?>,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>




       
<div class="col-lg-6 ">
          <div class="card ">
            <div class="card-body ">
              <h5 class="card-title ">Dream Sahkel </h5>
            
              <!-- Bar Chart -->
              <canvas id="barChart1" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    <?php
 

    try{
        $db=new mysqli('localhost', 'root', '', 'gp01');
      
        $data=[];
        $namedata=[];
        $qryStr = "SELECT * FROM products WHERE namesupermarket='Dream Sahkel'";
        $res = $db->query($qryStr);
        while ($row = $res->fetch_assoc()) {

          
             $buy=$row['Sold'];
$initcount=$row['productcount'];
$per=$row['newprice'];



$pp=$row['percent'];

$n=($buy-$initcount)*$pp;

$data[]=$n;
           $namedata[]=$row['productname'];
        
        }
         echo json_encode($namedata);
    }catch (Exception $e){
    }

?>


                  new Chart(document.querySelector('#barChart1'), {
                    type: 'bar',
                    data: {
                      labels:<?php echo json_encode($namedata); ?>,
                    //    ["January", 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'profit from sold out',
                        data: <?php echo json_encode($data); ?>,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>


</div>
</section>        



<div class="col-lg-6 ">
          <div class="card ">
            <div class="card-body ">
              <h5 class="card-title ">Kharaz </h5>
            
              <!-- Bar Chart -->
              <canvas id="barChart2" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    <?php

 

    try{
        $db=new mysqli('localhost', 'root', '', 'gp01');
      
        $data=[];
        $namedata=[];
        $qryStr = "SELECT * FROM products WHERE namesupermarket='Kharaz'";
        $res = $db->query($qryStr);
        while ($row = $res->fetch_assoc()) {

          
             $buy=$row['Sold'];
$initcount=$row['productcount'];
$per=$row['newprice'];



$pp=$row['percent'];

$n=($buy-$initcount)*$pp;

$data[]=$n;
           $namedata[]=$row['productname'];
        
        }
         echo json_encode($namedata);
    }catch (Exception $e){
    }

?>


                  new Chart(document.querySelector('#barChart2'), {
                    type: 'bar',
                    data: {
                      labels:<?php echo json_encode($namedata); ?>,
                    //    ["January", 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'profit from sold out',
                        data: <?php echo json_encode($data); ?>,
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>


</div>
</section>



      
  
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>