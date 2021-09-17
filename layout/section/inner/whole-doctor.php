<?php
$query = bukaquery("SELECT dokter.kd_dokter,
    LEFT(dokter.nm_dokter, 20) AS dokter,
    spesialis.nm_sps,
    dokter.no_ijn_praktek,
    pegawai.photo,
    dokter.no_telp 
    FROM dokter 
    INNER JOIN spesialis ON dokter.kd_sps=spesialis.kd_sps 
    INNER JOIN pegawai ON dokter.kd_dokter=pegawai.nik 
    WHERE dokter.status='1' AND dokter.kd_dokter<>'-' 
    ORDER BY spesialis.nm_sps"); ?>
<section id="doctors" class="doctors"">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $_GET['page']?></h2>
            <p>Dokter kami merupakan lulusan universitas terbaik di indonesia.</p>
        </div>
        <div class="row">
        <?php if(true) { while($resource = mysqli_fetch_array($query)){ ?>
            <div class="col-lg-4 col-md-4 mt-3 mb-3">
                <div class="align-items-center">
                    <div class="pic">
                        <a href="<?php echo $root_dir."/webapps/penggajian/".$resource[4]?>" class="venobox" data-gall="gallery-item">
                            <img src="<?php echo $root_dir."/webapps/penggajian/".$resource[4]?>" class="img-fluid" alt="doctor picture">
                        </a>
                    </div>
                    <div class="member member-info p-3">
                        <h4><?php echo str_pad(ucwords($resource[1]), 20);?></h4> <!--ucwords(strlen( ? "" : ""))-->
                        <a>No. SIP <?php echo $resource[3]?></a>
                        <span><i class='bx bx-dna'></i> Sepesialis <?php echo $resource[2]?></span>
                        <!-- <span>Sepecialist <?php /* echo $resource[0] */ ?></span> --> <!-- <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p> -->
                        <!--<a href=""><i class="ri-twitter-fill"></i></a> <a href=""><i class="ri-facebook-fill"></i></a> <a href=""><i class="ri-instagram-fill"></i></a>-->
                        <!-- <div class="social"> 
                            <a href=""><i class="ri-linkedin-box-fill"></i> </a>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php }} /* d-none d-md-block d-lg-block*/ else { } ?>
        </div>
    </div>
</section>