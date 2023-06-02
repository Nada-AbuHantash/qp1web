<?php

session_start();
if(isset($_SESSION['admin'])){
    if(isset($_POST['button1'])) {
        header('location:logout.php');

    }

if(isset($_POST['deleteee1'])) {
    $u = $_SESSION['market'];

    $num =  $_POST['productname'];

    try {
        $conn = new mysqli('localhost', 'root', '', 'gp01');


        $sql = "DELETE FROM products WHERE productname='$num' and namesupermarket= '$u' ";

        $conn->query($sql);
        $conn->commit();
        $conn->close();
//        header('Location:deleteProducts.php');
    } catch (Exception $e) {
    }


}
    if(isset($_POST['update'])) {

        try {

            $jaw=$_SESSION['market'];

//                $sql = "UPDATE admin SET AdminName='" . $name . "',AdminPass='" . $password . "',aboutMarket='" . $aboutMarket . "',place='" . $place . "',street='" . $street . "',city='" . $city . "' where AdminName ='" . $jaw . "'";
//



            $db = new mysqli('localhost', 'root', '', 'gp01');

            $qryStr = "select * from products";
            $res = $db->query($qryStr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_object();
                if ($row->namesupermarket == $jaw) {////////////////////////////////////////////////////////////////////////////

                    $b= $_POST['productname'];
                    $c= $_POST['namesupermarket'];
                    $a= $_POST['oldprice'];
                    $e= $_POST['exp'];
                    $f= $_POST['productcount'];
                    $f1= $_POST['newprice'];
                    




                    $qryStr = "UPDATE `products` SET  `productname`= '$b',
                     `productcount`= '$f'
                        ,`oldprice`= '$a',
                   `newprice`= '$f1',
                   `exp`= '$e' WHERE `productname`='" .$b. "' and `namesupermarket`='" .$jaw. "'";

                    $rs = $db->query($qryStr);



                }
            }


        } catch (Exception $e) {
        }

    }
}

?><!DOCTYPE html>
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
  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
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

    <?php




    try {
    if(isset($_SESSION['admin'])){

    $conn= mysqli_connect("localhost", "root", "", "gp01");




    ?>
    <table border="1px" class="rwd-table">
        <tr>
            <th>marketName</th>
            <th>productName</th>
            <th>quantity</th>
            <th>old price</th>
            <th>new price</th>
            <th>expiryDate</th>
            <th>Type</th>
            <!-- <th>productNumber</th> -->



        </tr>
        <?php
        $j=$_SESSION['market'];

        $connect = mysqli_connect("localhost", "root", "", "gp01");

        $query = "select * from products where namesupermarket='$j' ";
        $res = mysqli_query($connect, $query);
        $a=1;


        for($i=0;$i<$res->num_rows;$i++)
        {
        $row = mysqli_fetch_array($res);
        $r=$row["productname"];
                ?>
        <form   method="post"  >
                <tr> <td>

                        <input type="text" style="width:200px " name="namesupermarket" id="namesupermarket"  value="<?php echo $row["namesupermarket"]; ?>">

                    </td>
                    <td>  <input type="text" style="width:200px "  name="productname" id="productname"  value="<?php echo $row["productname"]; ?>">

                        </td>
                    <td><input type="text"  style="width:50px "name="productcount" id="productcount"  value="<?php echo $row["productcount"]; ?>">

                       </td>
                    <td><input type="text"  style="width:50px "name="oldprice" id="oldprice"  value="<?php echo $row["oldprice"]; ?>">
                    </td>
                    <td><input type="text"   style="width:50px "name="newprice" id="newprice"  value="<?php echo $row["newprice"]; ?>">

                        </td>
                    <td>
                        <input type="text" style="width:100px " name="exp" id="exp"  value="<?php echo $row["exp"]; ?>">
                       </td>
                    <td><?php echo "<input type='hidden' name='productname1' id='productname1' value='$r' >" ;?>
                        <input type="text"  style="width:50px " name="productname" id="productname"  value="<?php echo $row["productname"]; ?>">

                      </td>
                      
<td>  
     <input type="submit" value="delete" name="deleteee1"  id="deleteee1"></td>
                    <td> <input type="submit" value="update" name="update"  id="update"></td></form>

                </tr>
                <?php
            }}}catch(Exception $e){

    }

        ?>
    </table>

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