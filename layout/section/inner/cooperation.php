<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $_GET['page']." ".$app_name?></h2>
            <p><?php echo $app_name?> telah bekerja sama dengan beberapa Peruahaan Nasional dan Ansuransi</p>
        </div>
    </div>
    <?php $list = array("BPJS Kesehatan", "Sinarmas", "Admedika", "Mandiri In Health", "Jampersal", "Pasien Umum"); ?>
    <div class="container-fluid">
        <div class="row no-gutters">
            <?php for($i = 0; $i < count($list); $i++) {?>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item align-items-center justify-content-center">
                    <?php $file_name =  strtolower(str_replace(" ", "-", $list[$i]).".jpeg");?>
                    <a href="../assets/img/cooperation/<?php echo $file_name?>" class="venobox" data-gall="gallery-item">
                        <img id="icon" src="../assets/img/cooperation/<?php echo $file_name?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section> <!-- End Gallery Section -->