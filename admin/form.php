<?php

require "function.php";


$id = $_GET["id"];
$paket = $datapaket[$id];

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Day Bootstrap Template - Index</title>
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
   <link href="assets/css/style.css" rel="stylesheet">

   <!-- =======================================================
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <!-- ======= Header ======= -->
   <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

         <h1 class="logo"><a href="index.html">Day</a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

         <nav id="navbar" class="navbar">
            <ul>
               <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
               <li><a class="nav-link scrollto" href="#about">About</a></li>
               <li><a class="nav-link scrollto" href="tambahpaket.php">Tambah Paket</a></li>
               <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
               <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                     <li><a href="#">Drop Down 1</a></li>
                     <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                           <li><a href="#">Deep Drop Down 1</a></li>
                           <li><a href="#">Deep Drop Down 2</a></li>
                           <li><a href="#">Deep Drop Down 3</a></li>
                           <li><a href="#">Deep Drop Down 4</a></li>
                           <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Drop Down 2</a></li>
                     <li><a href="#">Drop Down 3</a></li>
                     <li><a href="#">Drop Down 4</a></li>
                  </ul>
               </li>
               <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

      </div>
   </header>
   <!-- End Header -->
   <main>
      <div class="row">
         <div class="card">
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">ROOM INFORMATION FORM</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <!-- bagian form -->
               <div class="card m-5 p-4">
                  <form action="" method="post">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="mb-3 row">
                              <label for="input1" class="col-sm-2 col-form-label">No. Transaksi</label>
                              <div class="col">
                                 <input type="text" class="form-control" id="input1">
                              </div>
                           </div>
                           <div class="mb-3 row">
                              <label for="input2" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                              <div class="col">
                                 <input type="date" class="form-control" id="input2">
                              </div>
                           </div>
                           <div class="mb-3 row">
                              <label for="input3" class="col-sm-2 col-form-label">Nama Customer</label>
                              <div class="col">
                                 <input type="text" class="form-control" id="input3">
                              </div>
                           </div>
                           <div class="mb-3 row">
                              <label for="input4" class="col-sm-2 col-form-label">Pilihan Paket</label>
                              <div class="col">
                                 <input type="text" class="form-control" id="input4" value="<?= $paket[0] ?>">
                              </div>
                           </div>
                           <div class="mb-3 row">
                              <label for="input5" class="col-sm-2 col-form-label">Harga Paket</label>
                              <div class="col">
                                 <input type="text" class="form-control" name="paket" id="input5" value="<?= $paket[2] ?>">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 pt-5">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="tambahan" id="flexRadioDefault1" value="0" checked>
                              <label class="form-check-label" for="flexRadioDefault1">
                                 Tidak ada Tambahan - Rp.0
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="tambahan" id="flexRadioDefault2" value="10000">
                              <label class="form-check-label" for="flexRadioDefault2">
                                 Wax - Rp.10.000
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="tambahan" id="flexRadioDefault3" value="20000">
                              <label class="form-check-label" for="flexRadioDefault3">
                                 Fogging - Rp.20.000
                              </label>
                           </div>
                           <div class="col-auto pt-5">
                              <button type="submit" name="hitung" class="btn btn-primary">Hitung Total Bayar</button>
                           </div>
                        </div>
                     </div>
                     <div class="">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                  </form>
               </div>
               <?php

               if (isset($_POST["total"])) {
                  $sum = intval($_POST["paket"]) + $_POST["tambahan"];
               }
               ?>
               <div class="card mb-5 mx-5 p-4">
                  <div class="total md-8 p-4">
                     <form action="" method="post">
                        <div class="mb-3 row">
                           <label for="input6" class="col-sm-2 col-form-label">Total Harga</label>
                           <div class="col">
                              <input type="text" class="form-control" id="input6" value=" <?= $sum ?>">
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label for="input7" class="col-sm-2 col-form-label">Pembayaran</label>
                           <div class="col">
                              <input type="text" class="form-control" id="input7">
                           </div>
                        </div>
                        <div class="mb-3 d-flex">
                           <button class="btn btn-primary justify-content-end" type="submit">Hitung Kembalian</button>
                        </div>
                     </form>
                  </div>
               </div>

               <!-- /.card-body -->
            </div>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
      <!--/container-fluid -->
      <!-- /main content -->
   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
      <div class="container">
         <div class="copyright">
            &copy; Copyright <strong><span>Muhammad Ferdy Maulana<span></strong>. All Rights Reserved
         </div>
         <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
         </div>
      </div>
   </footer><!-- End Footer -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <div id="preloader"></div>

   <!-- Vendor JS Files -->
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