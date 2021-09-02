<?php
  $path = isset($_GET['page']) ? "../" : "./";
?>
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
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path?>#">Beranda</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path?>#profile">Profile</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path?>#services">Layanan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php isset($_GET['page']) ? "" : "./pages/" ?>?page=Jadwal&nbsp;Dokter">Jadwal Dokter</a></li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Pengumuman</h4>
        <p><i class="bx bxs-bell"></i> Dokter Yogi telat 3 jam</p>
        <p>27/02/2021, oleh Erwan</p>
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
</footer>
<div id="preloader"></div>
<a href="<?php echo $path?>#" class="back-to-top"><i class="icofont-simple-up"></i></a>