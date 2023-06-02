
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <style>
    /* Optional: Makes the sample page fill the window. */

 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
    }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent" style="background-color:rgba(168, 216, 205);">
    <div class="container d-flex align-items-center justify-content-between position-relative" >

      <div class="logo" >
        <h1 class="text-light"><a href="index.html"><span>SALE</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
      <li><a href="homePage2.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="homePage.php">Your Products</a></li>
          <li><a href="addProducts.php">Add Products</a></li>
          <li><a href="sellerprofit.php">Profits</a></li>
          <li><a href="map.php">Market Location</a></li>
          <i class="bi bi-list mobile-nav-toggle"></i>
          <form method="post" action="index.html">
        <input  type="submit"  value="Sign Out " name="delete" class="active " style="background-color:rgba(168, 216, 205);color: white;font-weight: bold;border: none;margin-left: 6px;font-size: 13px">
          </form>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


  </div>
</header><!-- End Header -->
<style>
    .chart-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 400px;
  margin-top: 100px;
}
    </style>
  <main id="main ">


   

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="section">
<div class="row chart-container">


<div class="col-lg-6 ">
          <div class="card ">
            <div class="card-body ">
              <h5 class="card-title ">Products </h5>
            
              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    <?php
session_start();

$markt=$_SESSION['market'];
 

    try{
        $db=new mysqli('localhost', 'root', '', 'gp01');
      
        $data=[];
        $namedata=[];
        $qryStr = "SELECT * FROM products WHERE namesupermarket='" .$markt. "'";
        $res = $db->query($qryStr);
        while ($row = $res->fetch_assoc()) {

          
             $buy=$row['Sold'];
$initcount=$row['productcount'];
$per=$row['newprice'];



$pp=$row['percent'];
$nn=($buy-$initcount)*$per;
$n=($buy-$initcount)*$pp;
$ss=$nn-$n;
$data[]=$ss;
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
<!-- 
        <h2> <?php echo json_encode($namedata); ?></h2>
        <h2> <?php echo json_encode($data); ?></h2> -->

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