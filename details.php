<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ebraheem Al Khatib</title>
  <meta content="" name="description">
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

    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
   
</head>

<body>

    <?php  
    $id = $_GET['id'];
    $name;
    $type;
    $date;
    $url;
    $details;
    $img1;
    $img2;
    $img3;
    
    
    if ( filter_var($id, FILTER_VALIDATE_INT) === false ) {
    header("location: ./index.php");
}
    
    
    ?>
    <header>
       <a href="index.php">
        
            <div style="background-color:red;width:100px;height:100px;border-bottom-right-radius:100px;box-shadow: 0 4px 8px 0 rgba(251, 50, 50, 0.96), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <span ><img src="icon.png" width="70px" /></span>
        </div>
        </a>
    </header>
    
    
    <center><a href="index.php"  ><h2 style="font-family: 'Almarai', sans-serif;">الصفحة الرئيسية</h2></a></center>
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <section id="portfolio-details" class="portfolio-details">
         <center>
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h2 class="portfolio-title" style="text-align:right; font-family: 'Almarai', sans-serif;">هنا يمكنك رؤية جميع معلومات المشروع</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
              <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
              <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
            </div>
          
           <div class="col-lg-12 portfolio-info" dir="rtl" style="text-align:right;font-family: 'Almarai', sans-serif;">
               <center><h2 style="font-family: 'Almarai', sans-serif;">مشفى حديثة</h2></center>
            <h3 style="font-family: 'Almarai', sans-serif;">معلومات المشروع</h3>
            <ul style="text-align:right;">
              <li><strong>صنف المشروع</strong>: مشفى</li>
              <li><strong>اسم المشروع</strong>: مشفى حكومي</li>
              <li><strong>تاريخ المشروع</strong>: 01.02.2021</li>
              <li><strong>رابط المشروع</strong>: <a href="#">www.example.com</a></li>
            </ul>

            <p>
              سشيشس شسي شسي شسيشسيشسي شسيشسي 
                شسي شسي شسي سشيسشيشسي شسيشسي
                سش ي شسيشسيشسيسش شسي شسي شسسش شس
                شسي شسس
            </p>
          </div>
         </div>
</div>
      </div>
       </center>
    </section><!-- End Portfolio Details -->

      
      
      <footer>
          <center style="font-family: 'Almarai', sans-serif;"> 
      <p>جميع الحقوق محفوظة ل <span style="color:blue"><strong>ابراهيم الخطيب واسامة الخالد</strong></span></p>
      </center>
      </footer>
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>