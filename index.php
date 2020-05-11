<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolios</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
 

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
  </head>

<body >
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Portfolios</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul >
        <li class="active"><a href="#hero" >Home</a></li>
     <li><a href="#about"style="margin-left:3%"; > About   </a></li>
     <li><a href="#contact"style="margin-left:3%"; > Contact   </a></li>
          
    <?php 
        if(isset($_SESSION['user_email'])) {
                ?>

       <li><a href="#" ><button type="submit" class="btn btn-primary" 
        style="margin-top:-5px;padding:5px;font-size: 15px;" ><?php echo $_SESSION['user_email'];?></button></a></li>
        <?php }
       else{?>
      <li><a href="login.php" ><button type="submit" class="btn btn-primary" 
      style="margin-top:-5px;padding:5px;font-size: 15px;" >Sign In</button></a></li>

      <?php }?>

      <?php 
        if(isset($_SESSION['user_email'])) {
                ?>

       <li><a href="logout.php" ><button type="submit" class="btn btn-primary" 
        style="margin-top:-5px;padding:5px;font-size: 15px;" >Logout</button></a></li>
        <?php }
       else{?>
         <li><a href="register.php" ><button type="submit" class="btn btn-primary"
       style="margin-top:-5px;padding:5px;margin-left:3%;font-size: 15px;">Register</button></a></li>
      <?php }?>
 
     
    
  
    
    </nav>

     
  </div>
  
 
</nav>
</header>
<br><br>
<section id="hero">

  <div class="container">
    
    <div class="row">
      
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        
        <div>
          <h1>Create a portfolio in minutes!!</h1>
          <h2> Creating a Professional Portfolio  Has Never Been So Easy </h2>

                    
    <?php 
        if(isset($_SESSION['user_email'])) {
                ?>

       <a href="form.php" class="btn-get-started ">Get Started</button></a>
        <?php }
       else{?>
     <a href="login.php" class="btn-get-started ">Get Started</a>
      <?php }?>
          
         
        </div>
      </div>
      
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
     
        <img src="img/hero-img.png" class="img-fluid" alt="">
      </div>
      
    </div>
  </div>

</section><!-- End Hero -->


<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
          <img src="img/about.jpg" class="img-fluid" alt="" width=500 > 
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0">
            <h3>Learn more about us</h3>
         <br>
            <ul>
              <li><i class="icofont-check-circled"></i> <b>It's Fast and Easy to Use</b><br>
Our online portfolio builder will help you to generate a perfect portfolio in minutes.</li>
              <li><i class="icofont-check-circled"></i> <b>Free Portfolio Templates</b><br>
Choose a template & customize it quickly.</li>
              <li><i class="icofont-check-circled"></i> <b>Download your portfolio to PDF</b><br>
              Instantly download your portfolio in PDF format. </li>
            </ul>
          
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
<br>
<br>

  
   
         <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style=" background: linear-gradient(rgba(255, 255, 255, 0.8), 
    rgba(255, 255, 255, 0.8)), url('img/cta-bg.jpg') ;    background-size: cover;
    padding: 80px 0;">
    <div class="container">

        <div class="section-title" data-aos="fade-up" >
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info" style="margin-left:75%;">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>NH 8, Delhi- Jaipur Highway, District Alwar, Neemrana, Rajasthan 301705</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>arundhati.das@st.niituniversity.in</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 8368293507</p>
              </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.0600500611536!2d76.4002208145441!3d27.961447120887257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db6d381bd8a09%3A0x5cd01de55b1d2c65!2sNIIT%20University!5e0!3m2!1sen!2sin!4v1588321516136!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
</div>



      </div>
    </section><!-- End Contact Section -->

        <div class="row" data-aos="zoom-in">
               
     

      </div>
    </section><!-- End Cta Section -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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
 

</body>
</html>

