<?php
session_start();

if(isset($_SESSION['admin']))
    if(isset($_POST['delete'])) {
        header('location:logout.php');

    }

if(isset($_POST['up'])) {

    if (isset($_SESSION['admin'])) {

        if (isset($_POST['name'])
            && isset($_POST['selleremail']) && isset($_POST['sellerphone']) && isset($_POST['sellercard']) 
            && isset($_POST['sellerplace']) && isset($_POST['suparmarketname'])
            && isset($_POST['password'])) {
            $name = $_POST['name'];
            $selleremail = $_POST['selleremail'];
            $sellercard = $_POST['sellercard'];
            $sellerphone = $_POST['sellerphone'];
            $sellerplace = $_POST['sellerplace'];
            $suparmarketname = $_POST['suparmarketname'];
            $password = $_POST['password'];

            try {

                $jaw=$_SESSION['admin'];
//                $sql = "UPDATE admin SET AdminName='" . $name . "',AdminPass='" . $password . "',aboutMarket='" . $aboutMarket . "',place='" . $place . "',street='" . $street . "',city='" . $city . "' where AdminName ='" . $jaw . "'";
//



                $db = new mysqli('localhost', 'root', '', 'gp01');

                $qryStr = "select * from sellers";
                $res = $db->query($qryStr);

                for ($i = 0; $i < $res->num_rows; $i++) {
                    $row = $res->fetch_object();
                    if ($row->selleremail == $jaw) {

                        $qryStr = "UPDATE `sellers` SET 
                         `sellername`= '$name', 
                        `sellerpass`= '$password'
                     ,`suparmarketname`= '$suparmarketname',
                   `sellerplace`= '$sellerplace',
                   `sellerphone`= '$sellerphone',
                   `sellercard`= '$sellercard'
                   WHERE `selleremail`='" . $jaw . "' ";

                        $rs = $db->query($qryStr);



                    }
                }


            } catch (Exception $e) {
            }
        }

    }
}



//if(array_key_exists('button1', $_POST)) {
//    button1();
//}
//function button1()
//{



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
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

<main id="main">

  <!-- ======= Our Services Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Your Profile</h2>
        <ol>
          <li><a href="homePage.php">Home</a></li>
          <li>Your Profile</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Services Section ======= -->


  <!-- ======= Why Us Section ======= -->

    <?php

    if(isset($_SESSION['admin'])){

    try {

    $namee=$_SESSION['admin'];

    $connect = mysqli_connect("localhost", "root", "", "gp01");

    $query = "select * from sellers WHERE selleremail='$namee'";
    $res = mysqli_query($connect, $query);




    $row = mysqli_fetch_array($res);

    if(null !=$row){

    ?>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <form  method="post"  class="myform" action="profile.php">
                        <div class="row ">
                            <div class="col-md-6 ">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Market Name" value="<?php  echo $row['sellername'] ?>" required>
                            </div>
                            <div class="col-md-6  mt-3 mt-md-0">
                                <input type="email" class="form-control" name="selleremail" id="selleremail" placeholder="Market Email" value="<?php  echo $row['selleremail'] ?>" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 " >
                                <select id="sellerplace" required name="sellerplace" class="form-control" >

                                <option value="<?php  echo $row['sellerplace'] ?>" ><?php  echo $row['sellerplace'] ?></option>
                                    <option value="nablus" >Jenin</option>
                                    <option value="jenin">Nablus</option>
                                    <option value="ramallah">Ramallah</option>
                                    <option value="jerusalem">Jerusalem</option>
                                    <option value="jericho">Jericho</option>
                                    <option value="hebron">Hebron</option>
                                    <option value="tulkarm">Tulkarm</option>
                                    <option value="qalqilya">Qalqilya</option>
                                </select>
                            </div>
                            <div class="col-md-6  mt-3 mt-md-0">
                                <input type="text" class="form-control" name="sellerphone" id="sellerphone" placeholder="sellerphone" value="0<?php  echo +$row['sellerphone'] ?>"required>
                            </div>
                        </div>
                        <div class=" mt-3">
                            <input type="text" class="form-control" name="sellercard" id="sellercard" placeholder="Further Discription About The Market place" value="<?php  echo $row['sellercard']?>"required>
                        </div>
                        <div class=" mt-3">
                            <textarea class="form-control" name="suparmarketname"  placeholder="Name Your Market" value="<?php  echo $row['suparmarketname'] ?>"required><?php  echo $row['suparmarketname'] ?></textarea>
                        </div>

                        <div class=" mt-3">

                            <input type="text" required id="password" name="password" placeholder="Password" class="form-control" value="<?php  echo $row['sellerpass'] ?>"><br>
<!--                            <input type="checkbox" ><span style="font-size: 10px">Show ID number </span>-->
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <style>
                        .text-center input[type="submit"] {
                            border-radius: 20px; /* Adjust the value to change the roundness of the button */
                            /* Add any other desired styles */
                        }
                    </style>
                        <div class="text-center form-group mt-3"> <input type="submit" value="Update Your Information" name="up" style="background-color: #205C8F;"></div>
                    </form>

                </div>
                <?php
                }


                $connect->close();

                }catch(Exception $e){

                }

                }



                ?>
            </div>
        </div>
    </section><!-- End Blog Section -->

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