<!-- ======= Doctors Section ======= -->
<?php /* $besok = date("Y-m-d", strtotime("+1 day")); $thnbesok = substr($besok,0,4); $blnbesok = substr($besok,5,2); $tglbesok = substr($besok,8,2); $delay = 0.2; */ // $datadokter = "";
    $querydokter = bukaquery("SELECT dokter.kd_dokter, 
        LEFT(dokter.nm_dokter,20) AS dokter, 
        spesialis.nm_sps, 
        dokter.no_ijn_praktek, 
        pegawai.photo, 
        dokter.no_telp 
        FROM dokter 
        INNER JOIN spesialis ON dokter.kd_sps = spesialis.kd_sps 
        INNER JOIN pegawai ON dokter.kd_dokter = pegawai.nik 
        WHERE dokter.status = '1' AND dokter.kd_dokter<>'-' 
        ORDER BY spesialis.nm_sps LIMIT 3"); ?>
<section id="doctors" class="doctors"">
    <div class="container">
        <div class="section-title">
            <h2>Dokter Kami</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row">
        <?php if(true) { while($resource = mysqli_fetch_array($querydokter)){ ?>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-3 mb-3 p-2">
                <div class="member d-md-flex d-lg-flex align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="pic mx-auto mx-md-0"> <!-- href="assets/img/doctors/doctors-4.jpg" -->
                            <a href="<?php echo $root_dir?>webapps/penggajian/<?php echo $resource[4]?>" class="venobox" data-gall="gallery-item">
                                <img src="<?php echo $root_dir?>webapps/penggajian/<?php echo $resource[4]?>" class="img-fluid" alt="<?php echo $resource[4]?>">
                            </a>
                        </div>
                    </div>
                    <div class="member-info col-md-6 col-sm-12 mt-3 ps-auto">
                        <h4><?php echo str_pad(ucwords($resource[1]), 20);?></h4> <!--ucwords(strlen( ? "" : ""))-->
                        <a>No. SIP <?php echo $resource[3]?></a>
                        <span><i class='bx bx-dna'></i> Sepesialis <?php echo $resource[2]?></span>
                        <!-- <span>Sepecialist <?php /* echo $resource[0] */ ?></span> --> <!-- <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p> -->
                        <div class="social"> <!--<a href=""><i class="ri-twitter-fill"></i></a> <a href=""><i class="ri-facebook-fill"></i></a> <a href=""><i class="ri-instagram-fill"></i></a>-->
                            <a href=""><i class="ri-linkedin-box-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }} /* d-none d-md-block d-lg-block*/ else { } ?>
            <div class="container col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3 mb-3">
                <div class="row align-items-center justify-content-center">
                    <a class="appointment-btn m-0" href="./pages/?page=<?php echo urlencode("Semua Dokter")?>">Tampilkan Semua Dokter</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Doctors Section -->