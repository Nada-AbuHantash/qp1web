
<?php

session_start();
if(isset($_SESSION['admin'])){
    if(isset($_POST['button1'])) {
        header('location:logout.php');

    }


    if(isset($_POST['accept'])) {

        try {

            $jaw=$_SESSION['market'];


            $db = new mysqli('localhost', 'root', '', 'gp01');

            $qryStr = "select * from delivery where flag_req=1";
            $res = $db->query($qryStr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_object();

                    $b= $_POST['email'];

                    $qryStr = "UPDATE `delivery` SET  `flag_req`= 0  WHERE `deliveryemail`='" .$b. "'";

                    $rs = $db->query($qryStr);



                
            }


        } catch (Exception $e) {
        }

    }
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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" >
          <i class="bi bi-menu-button-wide"></i><span>Requests</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">

        <li>
            <a href="adminhome.php">
              <i class="bi bi-circle"></i><span>Seller</span>
            </a>
          </li>
          <li>
            <a href="delreq.php" class="active">
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
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="selprf.php">
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



<!-- Requests -->
<?php

try {
if(isset($_SESSION['admin'])){

$conn= mysqli_connect("localhost", "root", "", "gp01");

?>
<table class="rwd-table">
    <tr>
        <th>delivery Name </th>
        <th>delivery Email</th>
        <th>Place</th>
        <th>phone</th>
        <th>card</th>
       
      
    </tr>
    <?php
    // $j=$_SESSION['market'];

    $connect = mysqli_connect("localhost", "root", "", "gp01");

    $query = "select * from delivery where flag_req=1 ";
    $res = mysqli_query($connect, $query);
    $a=1;


    for($i=0;$i<$res->num_rows;$i++)
    {
    $row = mysqli_fetch_array($res);
    // $r=$row["productname"];
            ?>
    <form   method="post"  >
            <tr> 
            <td>  
                    <input type="text" style="width:160px "  name="email" id="email"  value="<?php echo $row["deliveryemail"]; ?>"readonly>

                    </td>
            <td>

                    <?php echo $row["deliveryname"]; ?>

                </td>
                
                <td><?php echo $row["deliveryplace"]; ?>

                   </td>
                <td>0<?php echo $row["deliveryphone"]; ?>
                </td>
                <td><?php echo $row["deliverycard"]; ?>

                    </td>
               
            
                  
<td>  

                <td> <input type="submit" value="accept" name="accept"  id="accept"></td></form>

            </tr>
            <?php
        }}}catch(Exception $e){

}

    ?>
</table>

           <!-- End Requsts -->












  
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