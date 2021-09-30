<?php 
    if(isset($_SESSION["ses_pasien"])){
        $halaman = isset($_GET["hal"]) ? $_GET["hal"] : NULL;
        $subhalaman = isset($_GET["act"]) ? $_GET["act"] : NULL;
        if(!isset($_SESSION["nm_pasien"])){
        $queryuser = @bukaquery2("SELECT pasien.nm_pasien, pasien.email, pasien.jk, personal_pasien.gambar, pasien.no_tlp, pasien.no_peserta, pasien.no_ktp, pasien.tmp_lahir, 
            DATE_FORMAT(pasien.tgl_lahir,'%d/%m/%Y') AS tgl_lahir 
            FROM pasien INNER JOIN personal_pasien ON personal_pasien.no_rkm_medis = pasien.no_rkm_medis 
            WHERE pasien.no_rkm_medis='".encrypt_decrypt($_SESSION["ses_pasien"], "d")."'");

            while($rsqueryuser = mysqli_fetch_array($queryuser)) {
                $_SESSION["nm_pasien"] = $rsqueryuser["nm_pasien"];
                $_SESSION["email"] = $rsqueryuser["email"];
                $_SESSION["jk"] = $rsqueryuser["jk"];
                $_SESSION["no_tlp"] = $rsqueryuser["no_tlp"];
                $_SESSION["no_peserta"] = $rsqueryuser["no_peserta"];
                $_SESSION["no_ktp"] = $rsqueryuser["no_ktp"];
                $_SESSION["tmp_lahir"] = $rsqueryuser["tmp_lahir"];
                $_SESSION["tgl_lahir"] = $rsqueryuser["tgl_lahir"];
                $_SESSION["photo"] = "";

                if(($rsqueryuser["gambar"] == "")||($rsqueryuser["gambar"]=="-")){
                    if($rsqueryuser["jk"] == "L"){
                        $_SESSION["photo"] = "./assets/img/userlaki.png";
                    }else{
                        $_SESSION["photo"] = "./assets/img/userperempuan.png";
                    }
                }else{
                    $_SESSION["photo"] = $root_dir."/webapps/photopasien/".$rsqueryuser["gambar"];
                }
            }
        }
    }else{ JSRedirect("index.php?act=Home"); }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Selamat Datang di EPasien <?=$_SESSION["nama_instansi"];?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="assets/css/style3.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style4.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="theme-pink">
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Mulai Menulis...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="./index.php?act=HomeUser">E-Pasien <?= $_SESSION["nama_instansi"]; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="image">
                    <img src="<?=$_SESSION["photo"];?>" width="55" height="48" alt="Photo" />&nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#DDFF55">No.RM : <?=encrypt_decrypt($_SESSION["ses_pasien"],"d");?></font></b>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION["nm_pasien"];?></div>
                    <div class="email"><?=$_SESSION["email"];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./components/logout.php"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU UTAMA</li>
                    <li <?=$halaman=="Beranda"?"class='active'":""?>>
                        <a href="./index.php?act=HomeUser&hal=Beranda">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li <?=$halaman=="Booking"?"class='active'":""?>>
                        <a href="./index.php?act=BookingRegistrasi&hal=Booking">
                            <i class="material-icons">library_books</i>
                            <span>Booking Registrasi</span>
                        </a>
                    </li>
                    <li <?=$halaman=="RiwayatPeriksa"?"class='active'":""?>>
                        <a href="./index.php?act=RiwayatPeriksa&hal=RiwayatPeriksa">
                            <i class="material-icons">local_pharmacy</i>
                            <span>Riwayat Periksa</span>
                        </a>
                    </li>
                    <li <?=$halaman=="AntrianTindakan"?"class='active'":""?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">event_seat</i>
                            <span>Daftar Permintaan & Tindakan</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?=$subhalaman=="AntrianPemeriksaanLab"?"class='active'":""?>>
                                <a href="./index.php?act=AntrianPemeriksaanLab&hal=AntrianTindakan">Pemeriksaan Laborat</a>
                            </li>
                            <li <?=$subhalaman=="AntrianPemeriksaanRad"?"class='active'":""?>>
                                <a href="./index.php?act=AntrianPemeriksaanRad&hal=AntrianTindakan">Pemeriksaan Radiologi</a>
                            </li>
                            <li <?=$subhalaman=="AtrianResepObat"?"class='active'":""?>>
                                <a href="./index.php?act=AtrianResepObat&hal=AntrianTindakan">Resep Obat</a>
                            </li>
                            <li <?=$subhalaman=="AtrianOperasi"?"class='active'":""?>>
                                <a href="./index.php?act=AtrianOperasi&hal=AntrianTindakan">Operasi</a>
                            </li>
                        </ul>
                    </li>
                    <li <?=$halaman=="Surat"?"class='active'":""?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Permintaan Surat</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?=$subhalaman=="SuratSakit"?"class='active'":""?>>
                                <a href="./index.php?act=SuratSakit&hal=Surat">Cuti Sakit</a>
                            </li>
                            <li <?=$subhalaman=="SuratHamil"?"class='active'":""?>>
                                <a href="./index.php?act=SuratHamil&hal=Surat">Hamil/Tidak</a>
                            </li>
                            <li <?=$subhalaman=="SuratBebasNarkoba"?"class='active'":""?>>
                                <a href="./index.php?act=SuratBebasNarkoba&hal=Surat">Bebas Narkoba</a>
                            </li>
                            <li <?=$subhalaman=="SuratKontrol"?"class='active'":""?>>
                                <a href="./index.php?act=SuratKontrol&hal=Surat">Kontrol/SKDP</a>
                            </li>
                            <li <?=$subhalaman=="SuratRujuk"?"class='active'":""?>>
                                <a href="./index.php?act=SuratRujuk&hal=Surat">Rujukan</a>
                            </li>
                            <li <?=$subhalaman=="SuratCovid"?"class='active'":""?>>
                                <a href="./index.php?act=SuratCovid&hal=Surat">Keterangan Covid</a>
                            </li>
                        </ul>
                    </li>
                    <li <?=$halaman=="Fasilitas"?"class='active'":""?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">card_membership</i>
                            <span>Fasilitas & Tarif</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?=$subhalaman=="FasilitasKamarUser"?"class='active'":""?>>
                                <a href="./index.php?act=FasilitasKamarUser&hal=Fasilitas">Kamar</a>
                            </li>
                            <li <?=$subhalaman=="FasilitasRadiologiUser"?"class='active'":""?>>
                                <a href="./index.php?act=FasilitasRadiologiUser&hal=Fasilitas">Radiologi</a>
                            </li>
                            <li <?=$subhalaman=="FasilitasLaboratUser"?"class='active'":""?>>
                                <a href="./index.php?act=FasilitasLaboratUser&hal=Fasilitas">Laborat</a>
                            </li>
                            <li <?=$subhalaman=="FasilitasOperasiUser"?"class='active'":""?>>
                                <a href="./index.php?act=FasilitasOperasiUser&hal=Fasilitas">Operasi</a>
                            </li>
                            <li <?=$subhalaman=="FasilitasOnlineUser"?"class='active'":""?>>
                                <a href="./index.php?act=FasilitasOnlineUser&hal=Fasilitas">Konsultasi Online</a>
                            </li>
                            <li <?=$subhalaman=="CekPoliUser"?"class='active'":""?>>
                                <a href="./index.php?act=CekPoliUser&hal=Fasilitas">Poli Tersedia</a>
                            </li>
                            <li <?=$subhalaman=="CekAsuransiUser"?"class='active'":""?>>
                                <a href="./index.php?act=CekAsuransiUser&hal=Fasilitas">Kerjasama Asuransi</a>
                            </li>
                        </ul>
                    </li>
                    <li <?=$halaman=="JadwalDokter"?"class='active'":""?>>
                        <a href="./index.php?act=JadwalDokterUser&hal=JadwalDokter">
                            <i class="material-icons">event_available</i>
                            <span>Jadwal Dokter</span>
                        </a>
                    </li>
                    <li <?=$halaman=="InformasiKamar"?"class='active'":""?>>
                        <a href="./index.php?act=InformasiKamarUser&hal=InformasiKamar">
                            <i class="material-icons">hotel</i>
                            <span>Ketersediaan Kamar</span>
                        </a>
                    </li>
                    <li <?=$halaman=="Pengaduan"?"class='active'":""?>>
                        <a href="./index.php?act=Pengaduan&hal=Pengaduan">
                            <i class="material-icons">message</i>
                            <span>Pengaduan</span>
                        </a>
                    </li>
                    <li <?=$halaman=="KartuPasien"?"class='active'":""?>>
                        <a href="./index.php?act=KartuPasien&hal=KartuPasien">
                            <i class="material-icons">card_membership</i>
                            <span>Kartu Pasien</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2010 - 2020 <a href="javascript:void(0);">SIMKES Khanza</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php actionPages();?>
        </div>
    </section>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="plugins/node-waves/waves.js"></script>
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>
    <script src="plugins/chartjs/Chart.bundle.js"></script>
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/index.js"></script>
    <script src="js/demo.js"></script>
    <script src="conf/validator.js" type="text/javascript"></script>
</body>
</html>

