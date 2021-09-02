<?php 
  $services_one = array("Kamar Rawat Bayi", "Kamar Rawat Bersalin", "Kamar Rawat Ibu", "Kamar Rawat Operasi");
  $services_two = array("Ambulance", "Baby Spa", "Farmasi", "Fasilitas Umum", "Home Care", "ICU", "IGD", "NICU", "Pendaftaran / Layanan Klien", "Usg 3D/4D");

  switch ($_GET['service']) {
    case 'first': $boxes = 
      $services_one; break;
    default: $boxes = 
      $services_two; break;
  } ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RSIA Fadhila  - <?php echo $_GET['page'] ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:rsiafadhila@gmail.com">rsiafadhila@gmail.com</a>
        <i class="icofont-phone"></i> +62 82391 5121 21
        <i class="icofont-google-map"></i> Koto baranjak, Limo Kaum Sumatera Barat 27213
      </div>
      <div class="social-links">
        <a target="_blank" href="https://www.facebook.com/rumah.s.batusangkar" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCo7DPWT45TjfWSr8lfjh8XQ" class="youtube"><i class="icofont-youtube"></i></a>
        <a target="_blank" href="https://www.instagram.com/rsia_fadhila" class="instagram"><i class="icofont-instagram"></i></a>
        <a target="_blank" href="https://wa.me/6282391512121" class="whatsapp"><i class="icofont-whatsapp"></i></a>
      </div>
    </div>
  </div> <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="../">RSIA Fadhila</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../#hero">Beranda</a></li>
          <li class="drop-down"><a href="../#profile">Profil</a>
            <ul>
              <li><a href="../#doctors">Dokter</a></li>
              <li><a href="?page=Sejarah">Sejarah</a></li>
              <li><a href="?page=Visi&nbsp;dan&nbsp;Misi">Visi & Misi</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="../#services">Layanan</a>
            <ul>
              <li class="drop-down"><a>Rawat Inap</a>
                <ul>
                  <li><a href="?page=Kamar&nbsp;Rawat&nbsp;Bayi">Kamar Rawat Bayi</a></li>
                  <li><a href="?page=Kamar&nbsp;Rawat&nbsp;Bersalin">Kamar Rawat Bersalin</a></li>
                  <li><a href="?page=Kamar&nbsp;Rawat&nbsp;Ibu">Kamar Rawat Ibu</a></li>
                  <li><a href="?page=Kamar&nbsp;Rawat&nbsp;Operasi">Kamar Rawat Operasi</a></li>
                </ul>
              </li>
              <li><a href="../#departments">Poliklinik</a>
                <!-- <ul>
                  <li><a href="../#departments">Poli Anak</a></li>
                  <li><a href="../#departments">Poli Obgyn</a></li>
                  <li><a href="../#departments">Poli Penyakit Dalam</a></li>
                  <li><a href="../#departments">Poli Bedah</a></li>
                  <li><a href="../#departments">Poli Gizi</a></li>
                  <li><a href="../#departments">Fisioterapi</a></li>
                </ul> -->
              </li>
              <li class="drop-down"><a>Penunjang Medis</a>
                <ul>
                  <li><a href="?page=Ambulance">Ambulance</a></li>
                  <li><a href="?page=Baby&nbsp;Spa">Baby Spa</a></li>
                  <li><a href="?page=Farmasi">Farmasi</a></li>
                  <li><a href="?page=Fasilitas&nbsp;Umum">Fasilitas Umum</a></li>
                  <li><a href="?page=Home&nbsp;Care">Home Care</a></li>
                  <li><a href="?page=ICU">ICU</a></li>
                  <li><a href="?page=IGD">IGD</a></li>
                  <li><a href="?page=NICU">NICU</a></li>
                  <li><a href="?page=Pendaftaran&nbsp;&#47;&nbsp;Layanan&nbsp;Klien">Pendaftaran / Layanan Klien</a></li>
                  <li><a href="?page=USG&nbsp;3D&#47;4D">USG 3D/4D</a></li>
                  <!-- <li><a href="../#facility">Reservasi Dokter</a></li> -->
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="?page=Jadwal&nbsp;Dokter">Jadwal Dokter</a></li>
          <li class="drop-down"><a>Informasi</a>
            <ul>
              <li><a href="?page=Kerja&nbsp;Sama">Kerja Sama</a></li>
            </ul>
          </li>
          <li><a href="?page=Kontak">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="../#appointment" class="appointment-btn scrollto">Buat Janji</a>

    </div>
  </header><!-- End Header -->
  
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Halaman <?php echo $_GET['page']?></h2>
          <ol>
            <li><a href="../">Home</a></li>
          <?php if(isset($_GET['service'])) echo "
            <li><a href=\"../#services\">Layanan</a></li>" ?>
            <li><?php echo $_GET['page'] ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <section id="services" class="services">
        <div class="container">
          <div class="row">
        <?php if(isset($_GET['service'])){ for($i = 0; $i < count($boxes); $i++){ ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom:2em">
              <div class="icon-box">
                <div class="icon"><i class="icofont-heart-beat"></i></div>
                <h4><a href="?page=<?php echo $boxes[$i]; ?>"><?php echo $boxes[$i]; ?></a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
        <?php }} else { ?>
          </div>
          <p>
            Example <?php echo $_GET['page'] ?> template
          </p>
        <?php } ?>
        </div>
      </section>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Informasi Kontak</h3>
            <p>
              Jl. Baringin No.5 Limo Kaum<br>
              Lima Kaum, Batusangkar, Kabupaten Tanah Datar<br>
              Sumatera Barat 27213 <br><br>
              <strong>Phone:</strong> +62 82391 5121 21<br>
              <strong>Email:</strong> rsiafadhila@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tautan cepat</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../#home">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../#profile">Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../#service">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../#docter-schedule">Jadwal Dokter</a></li>
            </ul>
          </div>
          
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Pengumuman</h4>
            <p><i class="bx bxs-bell"></i> Dokter Yogi telat 3 jam</p>
            <p>27/02/2021, oleh Erwan</p>
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>BootstrapMade</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Developed by <a target="_blank" href="http://rsiafadila.com/">RSIA Fadhila IT/Programmer</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a target="_blank" href="https://www.facebook.com/rumah.s.batusangkar" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/rsia_fadhila" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCo7DPWT45TjfWSr8lfjh8XQ" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a target="_blank" href="https://wa.me/6282391512121" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="../#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>