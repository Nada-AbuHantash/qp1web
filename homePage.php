<?php
session_start();
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
  <link href="assets/css/style1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
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
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#location">location</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="signin.php">login</a></li> -->



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
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Products </h2>
          <p>You can see all offers of competing supermarkets, and you can see your products and compare them</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">my</li>
              <!-- <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">



        <?php

$j=$_SESSION['market'];

$connect = mysqli_connect("localhost", "root", "", "gp01");

$query = "select * from products order by exp ASC ";
$res = mysqli_query($connect, $query);
$a=1;


for($i=0;$i<$res->num_rows;$i++)
{
$row = mysqli_fetch_array($res);
$r=$row["productname"];
 ?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-active">
    <div class="portfolio-wrap">
      <img src="<?php echo $row["productimage"]; ?>" class="img-fluid" alt="">
      <div class="portfolio-links">
        <a href="<?php echo $row["productimage"]; ?> " data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row["productname"]; ?> 
        the old price is <?php echo $row["oldprice"]; ?>
         new price is <?php echo $row["newprice"]; ?>
         count is <?php echo $row["productcount"]; ?>
         exp: <?php echo $row["exp"]; ?>
         type is <?php echo $row["producttype"]; ?>
         "> <?php echo $row["productname"]; ?> ,<?php echo $row["namesupermarket"]; ?>
         
        </a>
        <!-- <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a> -->
      </div>
    </div>
  </div>
<?php
}
?>




        <?php

        $j=$_SESSION['market'];

        $connect = mysqli_connect("localhost", "root", "", "gp01");

        $query = "select * from products where namesupermarket='$j' order by exp DESC ";
        $res = mysqli_query($connect, $query);
        $a=1;


        for($i=0;$i<$res->num_rows;$i++)
        {
        $row = mysqli_fetch_array($res);
        $r=$row["productname"];
      
        
         ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo $row["productimage"]; ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo $row["productimage"]; ?> " data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row["productname"]; ?> 
                

                 the old price is <?php echo $row["oldprice"]; ?>
         new price is <?php echo $row["newprice"]; ?>
         count is <?php echo $row["productcount"]; ?>
         exp: <?php echo $row["exp"]; ?>
         type is <?php echo $row["producttype"]; ?>
                 <?php   $_SESSION['id1']=$row["productname"]; ?>
                 "> <i class="bx bx-plus"></i></a>
                <a href="editproduct.php" title="More Details "><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
<?php
        }
?>


          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    </main>
    
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    </body>

</html>