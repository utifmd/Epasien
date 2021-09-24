<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
    <?php $departments = $data['service-second']; ?>
    <div class="container">
        <div class="section-title">
            <h2>Poliklinik</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                <?php $tab = 0; for($i = 0; $i < count($departments); $i++) { $tab++; ?> 
                    <li class="nav-item">
                        <a class="nav-link<?php if($i == 0){ echo " active show"; }?>" data-toggle="tab" href="#tab-<?php echo $tab;?>"><?php echo ucwords($departments[$i]['title'])?></a>
                    </li> <?php
                }?>
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                <?php $tab = 0; for($i = 0; $i < count($departments); $i++) { $tab++; ?>
                    <div class="tab-pane<?php if($i == 0){ echo " active show"; }?>" id="tab-<?php echo $tab;?>">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <a href="./pages/?page=<?php echo urlencode($departments[$i]['title'])?>&data=<?php echo tokenizeData($departments[$i])?>"><h3><?php echo ucwords($departments[$i]['title']);?></h3></a> <!-- <p class="font-italic"></p> -->
                                <p><?php echo substr($departments[$i]["body"], 0, 225).".. "; ?><a href="./pages/?page=<?php echo urlencode($departments[$i]['title'])?>&data=<?php echo tokenizeData($departments[$i])?>">selengkapnya</a></p> <!-- class="font-italic"-->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <a href="<?php echo $departments[$i]["image"]?>" class="venobox" data-gall="gallery-item">
                                    <img src="<?php echo $departments[$i]["image"]?>" alt="<?php echo ucwords($departments[$i]['title'])?>" class="img-fluid mb-3">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php 
                }/*
                <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Poli Bedah</h3>
                                <p class="font-italic">Rumah Sakit Ibu dan Anak <?php echo $app_name;?> memiliki fasilitas pelayanan poliklinik bedah. Pelayanan poliklinik bedah didukung oleh dokter dan perawat yang profesional dengan teknologi yang canggih dan terkini. Poli bedah yang ada di <?php echo $app_name?> terdiri dari Bedah Umum, Bedah Urologi, Bedah Saraf, Bedah Mulut dan Bedah Anak.</p>
                                <!-- <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <a href="assets/img/departments-2.jpg" class="venobox" data-gall="gallery-item">
                                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid mb-3">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Poli Gizi</h3>
                                <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <a href="assets/img/departments-3.jpg" class="venobox" data-gall="gallery-item">
                                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid mb-3">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Poli Obgyn</h3>
                                <p class="font-italic">Rumah Sakit Ibu Dan Anak <?php echo $app_name;?> memiliki klinik kebidanan yang melayani pemeriksaan kehamilan, penyakit kandungan dan persalinan. Sarana penunjang yang juga kami sediakan untuk mendukung klinik kebidanan ini adalah fasilitas USG ¾D untuk mengetahui perkembangan janin pada si ibu hamil.</p>
                                <!-- <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <a href="assets/img/departments-4.jpg" class="venobox" data-gall="gallery-item">
                                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid mb-3">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Poli Penyakit Dalam</h3>
                                <p class="font-italic">Rumah Sakit Ibu dan Anak <?php echo $app_name?> memiliki klinik-klinik spesialis, diantaranya adalah klinik penyakit dalam. Klinik penyakit dalam ini memberikan pelayanan penanganan masalah kesehatan organ dalam tanpa bedah, seperti diabetes melitus, sakit ginjal, sakit lambung, lever, dll. Ditangani oleh dokter ahli penyakit dalam yang profesional dan berpengalaman dibidangnya serta ditunjang dengan fasilitas yang memadai sesuai dengan kebutuhan pasien, keluhan pasien mengenai penyakit dalam dapat ditangani dengan baik.</p>
                                <!-- <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p> -->
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <a href="assets/img/departments-5.jpg" class="venobox" data-gall="gallery-item">
                                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid mb-3">
                                </a>
                            </div>
                        </div>
                    </div>
                */?>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Departments Section -->