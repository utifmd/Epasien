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
    <?php 
        $navTo = isset($_GET['page']) ? "?page=" : "./pages/?page=";
        $navBack = isset($_GET['page']) ? "../" : "./"; ?>
</div> 

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto">
            <a href="<?php echo $navBack?>">RSIA Fadhila</a>
        </h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="<?php echo $navBack?>#hero">Beranda</a></li>
                <li class="drop-down"><a href="<?php echo $navBack?>#profile">Profil</a>
                <ul>
                    <li><a href="<?php echo $navBack?>#doctors">Dokter</a></li>
                    <li><a href="<?php echo $navTo.urlencode("Sejarah Singkat")."&data=".$token_history?>Sejarah">Sejarah</a></li>
                    <li><a href="<?php echo $navTo.urlencode("Visi & Misi")?>">Visi & Misi</a></li>
                </ul>
                </li>
                <li class="drop-down"><a href="<?php echo $navBack?>#services">Layanan</a>
                <ul>
                    <li class="drop-down"><a>Rawat Inap</a>
                    <ul> <?php for ($i=0; $i < count($data['service-one']); $i++) { echo "<li>
                            <a href=".$navTo.urlencode($data['service-one'][$i]['title'])."&data=".tokenizeData($data['service-one'][$i]).">".$data['service-one'][$i]['title']."</a>
                        </li>"; } ?>
                    </ul>
                    </li>
                    <li><a href="<?php echo $navBack?>#departments">Poliklinik</a></li>
                    <li class="drop-down"><a>Penunjang Medis</a>
                    <ul><?php for ($i=0; $i < count($data['service-third']); $i++) { $selected_thd = $data['service-third'][$i]; echo "
                        <li><a href=".$navTo.urlencode($selected_thd['title'])."&data=".tokenizeData($selected_thd).">".$selected_thd['title']."</a></li>
                    "; }?>
                        
                    </ul>
                    </li>
                </ul>
                </li>
                <li><a href="<?php echo $navTo.urlencode("Jadwal Dokter")?>">Jadwal Dokter</a></li>
                <li class="drop-down"><a>Informasi</a>
                <ul>
                    <li><a href="<?php echo $navTo.urlencode("Kerja Sama")?>">Kerja Sama</a></li>
                </ul>
                </li>
                <li><a href="<?php echo $navBack?>#contact">Kontak</a></li>
                <li class="d-block d-lg-none d-md-none"><a href="<?php echo $navBack?>#appointment">Buat Janji</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <a href="<?php echo $navBack?>#appointment" class="d-none d-lg-block appointment-btn scrollto">Buat Janji</a>
    </div>
</header><!-- End Header -->
