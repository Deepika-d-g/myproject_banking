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
.php-email-form {
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
    padding: 30px;
    padding-top: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
    padding-left: 30px;}

    section {
    padding: 60px 0;
    padding-top: 60px;
    padding-right: 0px;
    padding-bottom: 60px;
    padding-left: 0px;
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input::focus,
.contact .php-email-form textarea::focus {
  background-color: #e96b56;
}

.contact .php-email-form input {
  padding: 20px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type="submit"] {
  background: #e96b56;
  border: 0;
  border-radius: 00px;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #e6573f;
}


</style>

</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" style="background-color: black;">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto" style="color : white; ">BANKING SYSTEM</h1>
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



  <section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Select Customer</h2>
        </div>

        

            <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <form action="detail.php" method="post" role="form"  >
                    <div class="form-row">
                        <div class="col-lg-10 form-group">
                            <select type="text" name="acno" class="form-control"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="">
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
                        
                    
                    
                    <div class="text-center"><button type="submit"> More Details </button></div>
                    
                
            </div></form>

        </div>

    </div>
</section>
          
    
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 footer-links">
                <h4>Banking System</h4>
                
              </div>
    
          <div class="col-lg-6 col-md-6 footer-links">
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