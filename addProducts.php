<?php

$values = array(
    "meat", "canned food", "Freezers", 
    "dairy","legumes"
);
session_start();

if(isset($_POST['add'])) {

    if (isset($_SESSION['admin'])) {


        if (isset($_POST['name'])
            && isset($_POST['quantity']) && isset($_POST['Price'])
            && isset($_POST['newprice']) && isset($_POST['expiryDate'])
            &&

        isset($_FILES['image'])
        ) {
            $name = $_POST['name'];
            $productNum = array_search($_POST['name'], $values);
            $quantity = $_POST['quantity'];
            $namep=$_POST[`namep`];
            $price = $_POST['Price'];
            $newprice = $_POST['newprice'];
            $expiryDate = $_POST['expiryDate'];
            //  $amount=$_POST['amount'];
            $var = $_SESSION['market'];

            $connect = mysqli_connect("localhost", "root", "", "gp01");
//            $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));


//            $targetDir = "C:/Users/MIX-IT/Desktop/images/";

            $targetDir = "assets/images/";
            $file = basename($_FILES["image"]["name"]);
            $targetFilePath = $targetDir . $file;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            ?>

    <?php
            try {
                $db = new mysqli('localhost', 'root', '', 'gp01');
                $qryStr = " INSERT INTO `products` (`namesupermarket`, `productname`,`producttype`, `productcount`, `oldprice`, `newprice`, `exp`,`image`) VALUES ('" . $var . "', '" . $namep. "', '" . $productNum . "', '" . $quantity . "', '" . $price . "', '" . $newprice . "', '" . $expiryDate . "', '$targetFilePath'  ) ";
                $db->query($qryStr);
                $db->commit();
                $db->close();


            } catch (Exception $e) {
            }

        }
    }
}


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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <title>SALE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
        <h2>Add Products</h2>
        <ol>
          <li><a href="homePage.php">Home</a></li>
          <li>Add Your Products</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Services Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <form   method="post" enctype="multipart/form-data" class="myform" >
                        <div class="row ">

                        <label for="namep" class="label"><i class="fa fa-phone" ></i>Name Product</label>
                            <div class=" mb-3">
                                <input type="text" class="form-control" name="namep" id="namep" placeholder="Name Product" required>
                            </div>

                            
                            <label for="name" class="label"><i class="fa fa-phone"></i>Product type</label>
                            <div class="mb-3">
                                <div class="row-fluid">
                                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" style="height: 10px" id="name" required name="name">
                                        <?php
                                        foreach ($values as $key=>$value){
                                            $selected = ($key==0)?" Selected=\"Selected\"": "";
                                            echo "<option data-subtext=\"\" $selected > $value </option>";
                                        }
                                        ?>
                                    </select>

                                </div>
<!--                                    <select id="name" required name="name" class="form-control">-->
<!--                                        <option id="srch" type="text" name="search">-->
<!--                                 --><?php
//
//                                        for ($s = 0; $s < count($values); $s++) {
//
//                                            echo
//                                                '<option id="choice" name="choice" value="' . $values[$s] . '">' . $values[$s] . '</option>';
//
//                                            //304
//                                        }
//
//                                        ?>
<!--                                    </select>-->


                            </div>

                            <label for="quantity" class="label"><i class="fa fa-phone" ></i>Quantity</label>
                        <div class=" mb-3">
                                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" required>
                        </div>
                            
                            <label for="Price" class="label"><i class="fa fa-phone"></i>old Price</label>
                        <div class=" mb-3">
                                <input type="text" class="form-control" name="Price" id="Price" placeholder="Price In Dollar" required>
                        </div>
                            <label for="newprice" class="label"><i class="fa fa-phone"></i>new price</label>
                            <div class=" mb-3">
                                <input type="text" class="form-control" name="newprice" id="newprice" placeholder="newprice" required>
                            </div>
                            <label for="expiryDate" class="label"><i class="fa fa-phone"></i>Expiry date</label>
                            <div class=" mb-3">
                                <input type="text" class="form-control" name="expiryDate" id="expiryDate" placeholder="Expiry date" required>
                            </div>

                            <input type="file" class="form-control" id="image" placeholder="image" name="image" required>
                           <div>
                        <div class="text-center form-group mt-3"> <input type="submit" value="Add Product" id="add" name="add"style="background-color: #205C8F;"></div>
                        <style>
                        .text-center input[type="submit"] {
                            border-radius: 20px; /* Adjust the value to change the roundness of the button */
                            /* Add any other desired styles */
                        }
                    </style>
                </div>
                    </div>
                    </form>
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
<script>
    $(document).ready(function(){

        $('#add').click(function(){

            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert('Please Select Image');
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>;