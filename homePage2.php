<?php


session_start();

if(isset($_SESSION['admin'])){
if(isset($_POST['delete'])) {
    header('location:logout.php');

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
  <link href="assets/css/style1.css" rel="stylesheet">
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
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Home Page</h2>
          <ol>
            <li><a href="homePage.php">Home</a></li>
            <li>Home Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
      <section class="features">
          <div class="container">

              <div class="section-title">
                  <h2>Features</h2>
                  <p>In SALE you will find many features that you want and that you have always needed to be able to manage your store in a way that you see more organized and faster.</p>
              </div>

              <div class="row" data-aos="fade-up">
                  <div class="col-md-5">
                      <img src="assets/img/p9.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 pt-4">
                      <h3>How do I transfer my store to SALE?</h3>
                      <p class="fst-italic">
                      To join us, the first step you will do is to sign an agreement on conditional terms between us and then you can create a new account through the mobile app 
                      </p>
                      <ul>
                          <li><i class="bi bi-check"></i> Pay attention to developing a correct and clear description of your store and its location so that it attracts the customer to buy from it.</li>
                          <li><i class="bi bi-check"></i>The location of the store must be specified precisely so that it appears on the map of the customer, so that he can visit him when there is a place nearby.</li>
                      </ul>
                  </div>
              </div>

              <div class="row" data-aos="fade-up">
                  <div class="col-md-5 order-1 order-md-2">
                      <img src="assets/img/p10.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 pt-5 order-2 order-md-1">
                      <h3>The next step is to add products to your account in the store by going to the "Add a product" box.</h3>
                      <p class="fst-italic">
                          There are many fields that will be filled in to describe the product, all of them are important and required to make it easier for the customer to know and determine what he needs.
                      </p>
                      <ul>
                          <li><i class="bi bi-check"></i> When adding the product, old price and new price must be specified for any quantity .</li>
                          <li><i class="bi bi-check"></i> You will receive a notification when the added quantity expires or when your wallet expires, it can be modified on both.</li>
                          <li><i class="bi bi-check"></i> You should pay attention when the expiry date automatically Your product offer will be terminated to ensure consumer safety .</li>

                        </ul>
                  </div>
              </div>

              <div class="row" data-aos="fade-up">
                  <div class="col-md-5">
                      <img src="assets/img/p3.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 pt-5">
                      <h3>Adding products does not mean that they are fixed</h3>
                      <ul>
                          <li><i class="bi bi-check"></i> After the addition is done, you can get rid of this product if you are not going to bring it to your store after that by going to the "Delete a product" box after you select it by its number.</li>
                          <li><i class="bi bi-check"></i> You can also modify your product information after adding it by going to the “Modify Product” box. The product number has been entered and change the information you want about this product and then save the changes.</li>
                      </ul>
                      <h3>Features specifically for you </h3>
                      <ul>
                      <li><i class="bi bi-check"></i> In addition to seeing your products, you can see all the products of the competing supermarket for comparison </li>
                          <li><i class="bi bi-check"></i>See your profits from every product displayed and sold  </li>
                          <li><i class="bi bi-check"></i>To be able to manage your store through an integrated system that makes it easy for you to add and modify your store products with their specifications,SALE is the perfect choice for you. </li>

                      </ul>
                  </div>
              </div>



          </div>
      </section><!-- End Features Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

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