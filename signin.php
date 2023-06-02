<?php


session_start();


if(isset($_POST['login'])){

if (isset($_POST['name'])&&isset($_POST['password'])){
    $flag=0;

    $name= $_POST['name'];
    $password=$_POST['password'];

        try{
            $db = new mysqli('localhost', 'root', '', 'gp01');
            $qryStr = "select * from sellers";
            $res = $db->query($qryStr);
            for ($s = 0; $s < $res->num_rows; $s++) {
                $row = $res->fetch_assoc();
                if (($row["sellerpass"] ==$password) &&($row["selleremail"] ==$name)){
                    $flag=1;

                    $_SESSION['admin']=$name;
                    $_SESSION['market']=$row['suparmarketname'];
                    header('location:homePage2.php');

                }
                else if($password=="sale" && $name=="sale@gmail.com"){

                  $_SESSION['admin']=$name;
                    
                    header('location:adminhome.php');
                }
            }


            $db->commit();
            $db->close();

        }catch (Exception $e){
        }

}}
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
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>SALE</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

        <!-- ======= Our Portfolio Section ======= -->
   
      <div class="container">

        <div class="d-flex justify-content-between align-items-center ">
          <h2>Sign In</h2>
          <div>
         
            <a href="index.html"style="color:#000000" >Home/</a>
            <a href="signin.php"style="color:#000000" >Sign In</a> 
        
          </div>
        </div>

      </div>
  
    </div>
  </header><!-- End Header -->

  <main id="main">

   

    <!-- ======= Portfolio Section ======= -->
    <section class="blog">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-6">
            <form  method="post" role="form" class="myform" action="signin.php" >
              <div class="row">
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Market@example.com" required>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12 form-group">
                    <input type="password" required id="password" name="password" placeholder="Password" class="form-control"><br>
<!--                    <input type="checkbox" onclick="myFunction()"><span style="font-size: 10px">Show ID number </span>-->
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Welcome to SALE</div>
                  </div>
                    <style>
                        .text-center input[type="submit"] {
                            border-radius: 20px; /* Adjust the value to change the roundness of the button */
                            /* Add any other desired styles */
                        }
                    </style>
                    <div class="text-center form-group mt-3"> <input type="submit" value="Sign In" name="login"  style="background-color: #205C8F;"></div>
                </div>
              </div>


            </form>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

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