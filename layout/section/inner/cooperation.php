<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $_GET['page']." ".$app_name?></h2>
            <p><?php echo $app_name?> telah bekerja sama dengan beberapa Peruahaan Nasional dan Ansuransi</p>
        </div>
    </div>
    <?php $list = array("BPJS Kesehatan", "Jampersal", "Maindiri In Health", "Pasien Umum", "Sinarmas", "Admedika");
    
    ?>
    <div class="container-fluid">
        <div class="row no-gutters">
            <?php for($i = 0; $i < count($list); $i++) {?>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <?php echo strtolower(str_replace(" ", "-", $list[$i]).".jpeg")?>
                    <a href="../assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                        <img id="icon" src="../assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Gallery Section -->