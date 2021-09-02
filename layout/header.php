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
<?php 
    $navTo = isset($_GET['page']) ? "?page=" : "./pages/?page=";
    $navBack = isset($_GET['page']) ? "../" : "./";
?>
<header id="header" class="fixed-top">
<div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="<?php echo $navBack?>">RSIA Fadhila</a></h1>

    <nav class="nav-menu d-none d-lg-block">
    <ul>
        <li><a href="<?php echo $navBack?>#hero">Beranda</a></li>
        <li class="drop-down"><a href="<?php echo $navBack?>#profile">Profil</a>
        <ul>
            <li><a href="<?php echo $navBack?>#doctors">Dokter</a></li>
            <li><a href="<?php echo $navTo?>Sejarah">Sejarah</a></li>
            <li><a href="<?php echo $navTo?>Visi&nbsp;dan&nbsp;Misi">Visi & Misi</a></li>
        </ul>
        </li>
        <li class="drop-down"><a href="<?php echo $navBack?>#services">Layanan</a>
        <ul>
            <li class="drop-down"><a>Rawat Inap</a>
            <ul>
                <li><a href="<?php echo $navTo?>Kamar&nbsp;Rawat&nbsp;Bayi">Kamar Rawat Bayi</a></li>
                <li><a href="<?php echo $navTo?>Kamar&nbsp;Rawat&nbsp;Bersalin">Kamar Rawat Bersalin</a></li>
                <li><a href="<?php echo $navTo?>Kamar&nbsp;Rawat&nbsp;Ibu">Kamar Rawat Ibu</a></li>
                <li><a href="<?php echo $navTo?>Kamar&nbsp;Rawat&nbsp;Operasi">Kamar Rawat Operasi</a></li>
            </ul>
            </li>
            <li><a href="<?php echo $navBack?>#departments">Poliklinik</a></li>
            <li class="drop-down"><a>Penunjang Medis</a>
            <ul>
                <li><a href="<?php echo $navTo?>Ambulance">Ambulance</a></li>
                <li><a href="<?php echo $navTo?>Baby&nbsp;Spa">Baby Spa</a></li>
                <li><a href="<?php echo $navTo?>Farmasi">Farmasi</a></li>
                <li><a href="<?php echo $navTo?>Fasilitas&nbsp;Umum">Fasilitas Umum</a></li>
                <li><a href="<?php echo $navTo?>Home&nbsp;Care">Home Care</a></li>
                <li><a href="<?php echo $navTo?>ICU">ICU</a></li>
                <li><a href="<?php echo $navTo?>IGD">IGD</a></li>
                <li><a href="<?php echo $navTo?>NICU">NICU</a></li>
                <li><a href="<?php echo $navTo?>Pendaftaran&nbsp;&#47;&nbsp;Layanan&nbsp;Klien">Pendaftaran / Layanan Klien</a></li>
                <li><a href="<?php echo $navTo?>USG&nbsp;3D&#47;4D">USG 3D/4D</a></li>
                <!-- <li><a href="../#facility">Reservasi Dokter</a></li> -->
            </ul>
            </li>
        </ul>
        </li>
        <li><a href="<?php echo $navTo?>Jadwal&nbsp;Dokter">Jadwal Dokter</a></li>
        <li class="drop-down"><a>Informasi</a>
        <ul>
            <li><a href="<?php echo $navTo?>Kerja&nbsp;Sama">Kerja Sama</a></li>
        </ul>
        </li>
        <li><a href="<?php echo $navBack?>#contact">Kontak</a></li>

    </ul>
    </nav><!-- .nav-menu -->

    <a href="<?php echo $navBack?>#appointment" class="appointment-btn scrollto">Buat Janji</a>

</div>
</header><!-- End Header -->
