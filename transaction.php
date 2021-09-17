<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Banking System</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v2.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
    table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 0 solid #000;
}

td {
  text-align: center;
  padding: 18px;
}

th{
    padding: 18px;
    background-color:#ffad33;
    text-align: center;
}

tr:nth-child(even){background-color:#f2f2f2;}
</style>

</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" style="background-color: black;">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">BANKING SYSTEM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="customers.php">Customers</a></li>
          <li class="active"><a href="transaction.php">Transactions</a></li>
          </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <!--table start-->
<div class="container">
  <div style="overflow-x:auto;">
    <?php
    error_reporting(0);
    session_start();
    include_once("dbconnect.php");

    $sql = "SELECT * FROM transactions";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
    echo "<table>

    <tr>
      <th>Transaction ID</th>
      <th>Transaction Date & Time</th>
      <th>Sender Account Number</th>
      <th>Sender Name</th>
      <th>Sender's Available Balance</th>
      <th>Reciever Account Number</th>
      <th>Reciever Name</th>
      <th>Transferred Amount in Rs</th>
      <th>Sender's Balance in Rs</th>
    </tr>";
     
    while($row = $result -> fetch_assoc()) {

        echo "<tr><td>".$row["tran_id"]."</td>
                  <td>".$row["tran_dt"]."</td>
                  <td>".$row["sender_acno"]."</td>
                  <td>".$row["sender_name"]."</td>
                  <td>".$row["sender_ac_bal"]."</td>
                  <td>".$row["rec_acno"]."</td>
                  <td>".$row["rec_name"]."</td>
                  <td>".$row["amnt_transfrd"]."</td>
                  <td>".$row["rec_bal"]."</td>
             </tr>";
    }
             
          echo "</table>";
    }

    else {
        echo "<h1>No Customers found</h1>";
    }

    $conn->close();
    
    ?>
</div>

      </div>

  <!--table end-->
    
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 footer-links">
                <h4>Banking System</h4>
                
              </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="customers.php">Customers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="transaction.php">Transactions</a></li>
              
            </ul>
          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>