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
          <li class="active"><a href="customers.php">Customers</a></li>
          <li><a href="transaction.php">Transactions</a></li>
          </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    <div class="container" data-aos="fade-up" style = "text-align : center; font-size: 20px; ">

    <br><br><br>
    
        <h2><b>ACCOUNT DETAILS</b></h2>

        <br>
  <?php
                    
                    include_once("dbconnect.php");
                      if($_SERVER['REQUEST_METHOD']=='POST'){
                        session_start();
                        $acno=$_POST['acno'];
                      }
                        $_SESSION['acno']=$acno;
    
                      
                      $sql = "SELECT * FROM customer where acno='".$acno."'";
    
                       $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                        
                        while($row = $result->fetch_assoc()) {
                          echo "Account Number : " . $row["acno"]. "<br>";
                          echo "Account Name : " . $row["name"]. "<br>";
                          echo "Account Type : " . $row["actype"]. "<br>";
                          echo "City : " . $row["city"]. "<br>";
                          echo "Branch Name : " . $row["bname"]. "<br>";
                          echo "Mobile Number : " . $row["mob"]. "<br>";
                          echo "Balance Amount : Rs " . $row["bal"]. "<br>";
    
                          $_SESSION['account_num']=$row["acno"];
                          $_SESSION['account_name']=$row["name"];
                          $_SESSION['bank_type']=$row["actype"];
                          $_SESSION['city']=$row["city"];
                          $_SESSION['branch_name']=$row["bname"];
                          $_SESSION['mobile']=$row["mob"];
                          $_SESSION['balance']=$row["bal"];
                          
                        }
                      } else {
                        echo "Enter Details";
                      }
                      $conn->close();
                       
                ?>
 </div>




 <div class="container">

<div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <form action="transfer.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="section-title">
              <h2>Transfer Amount</h2>
               </div>
            <div class="col-lg-10 form-group">
              <h5>Account Details</h5>
              <select type="text" name="to_acc_num" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="">
               <option value="" disabled="" selected="">Select Account Number</option>
               <option value="SBI00011101">SBI00011101</option>
               <option value="SBI00021102">SBI00021102</option>
               <option value="SBI00031103">SBI00031103</option>
               <option value="SBI00041101">SBI00041101</option>
               <option value="SBI00051102">SBI00051102</option>
               <option value="SBI00051203">SBI00051203</option>
               <option value="SBI00061101">SBI00061101</option>
               <option value="SBI00071103">SBI00071103</option>
               <option value="SBI00081103">SBI00081103</option>
               <option value="SBI00091108">SBI00091108</option>
              
             </select>

              <div class="validate"></div>
            </div>
            <div class="col-lg-6 form-group">
              <h5>Transfer Amount in Rs:</h5>
              <input type="number" class="form-control" name="t_amount" id="email" placeholder="Amount in Rs" required=""> <br>
              <div class="validate"></div>
              <div class="text-center"><button type="submit"> Tranfer Amount </button></div>
              
            </div>
          
          
          
          <div class="mb-3">
            <div class="loading"></div>
            <div class="error-message"></div>       
      </div></form>

    </div>
  </div>




           <br><br>         
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

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

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












