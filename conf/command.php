<?php
    if(strpos($_SERVER['REQUEST_URI'],"conf")){
        exit(header("Location:../index.php"));
    }
    
    function title(){
        $judul ="EPasien RSIA Fadhila --)(*!!@#$%";
        $judul = preg_replace("[^A-Za-z0-9_\-\./,|]"," ",$judul);
        $judul = str_replace(array('.','-','/',',')," ",$judul);
        $judul = trim($judul);
        echo "$judul";	
    }

    function cekSessiPasien() {
        if (isset($_SESSION['ses_pasien'])) {
            return true;
        } else {
            return false;
        }
     }

    function PasienAktif() {
        if (cekSessiPasien()) {
            return $_SESSION['ses_pasien'];
        }
     }

    function isPengunjung() {
        if (cekSessiPasien()) {
            return false;
        } else {
            return true;
        }
     }	


    function formProtek() {
        $aksi=isset($_GET['act'])?$_GET['act']:NULL;
        if (!cekSessiPasien()) {
            $form = array ('HomeUser','FasilitasKamarUser','InformasiKamarUser','FasilitasRadiologiUser','FasilitasLaboratUser','FasilitasOperasiUser',
                           'FasilitasOnlineUser','JadwalDokterUser','CekPoliUser','CekAsuransiUser','RiwayatPeriksa','CekResume','CekBilling','BuktiRegistrasi',
                           'CekBilling2','Pengaduan','BookingRegistrasi','SuratSakit','TampilSuratSakit','SuratHamil','TampilSuratHamil','SuratBebasNarkoba',
                           'TampilSuratBebasNarkoba','SuratRujuk','TampilSuratRujuk','SuratCovid','TampilSuratCovid','SuratKontrol','TampilSuratKontrol',
                           'SimpanBookingRegistrasi','CekinRegistrasi','CekinRegistrasi2','BuktiRegistrasi2','Perpustakaan','KartuPasien','RiwayatLaboratUser');
            foreach ($form as $page) {
                if ($aksi==$page) {
                    echo "<META HTTP-EQUIV = 'Refresh' Content = '0; URL = ?act=Home'>";
                    exit;
                    break;
                }
            }
        }	
    }

    function actionPages() {
        $aksi=isset($_REQUEST['act'])?$_REQUEST['act']:NULL;
        formProtek();
        if (!cekSessiPasien()) {
            switch ($aksi) {
                case "Home"                                    : include_once("./components/home.php"); break;
                case "HomePasien"                              : include_once("./components/index.php"); break;
                case "LoginPasien"                             : include_once("./components/login.php"); break;
                case "DokterKami"                              : include_once("./components/listsemuadokter.php"); break;
                case "FasilitasKamar"                          : include_once("./components/listkamar.php"); break;
                case "FasilitasRadiologi"                      : include_once("./components/listradiologi.php"); break;
                case "FasilitasLaborat"                        : include_once("./components/listlaborat.php"); break;
                case "FasilitasOperasi"                        : include_once("./components/listoperasi.php"); break;
                case "FasilitasOnline"                         : include_once("./components/listonline.php"); break;
                case "PendaftaranPeriksa"                      : include_once("./components/listperiksa.php"); break;
                case "CekPoli"                                 : include_once("./components/listpoli.php"); break;
                case "CekAsuransi"                             : include_once("./components/listcarabayar.php"); break;
                case "CekBooking"                              : include_once("./components/listbooking.php"); break;
                case "CekStokDarah"                            : include_once("./components/liststokdarah.php"); break;
                default                                        : include_once("./components/home.php");
            }
        }else{
            switch ($aksi) {
                case "HomeUser"                                : include_once("./components/homeuser.php"); break;
                case "FasilitasKamarUser"                      : include_once("./components/listkamaruser.php"); break;
                case "InformasiKamarUser"                      : include_once("./components/listinformasikamaruser.php"); break;
                case "FasilitasRadiologiUser"                  : include_once("./components/listradiologiuser.php"); break;
                case "FasilitasLaboratUser"                    : include_once("./components/listlaboratuser.php"); break;
                case "FasilitasOperasiUser"                    : include_once("./components/listoperasiuser.php"); break;
                case "FasilitasOnlineUser"                     : include_once("./components/listonlineuser.php"); break;
                case "JadwalDokterUser"                        : include_once("./components/listjadwaldokteruser.php"); break;
                case "CekPoliUser"                             : include_once("./components/listpoliuser.php"); break;
                case "CekAsuransiUser"                         : include_once("./components/listcarabayaruser.php"); break;
                case "RiwayatPeriksa"                          : include_once("./components/listriwayatperiksa.php"); break;
                case "CekResume"                               : include_once("./components/listresume.php"); break;
                case "CekBilling"                              : include_once("./components/listbilling.php"); break;
                case "CekBilling2"                             : include_once("./components/listbilling2.php"); break;
                case "Pengaduan"                               : include_once("./components/listpengaduan.php"); break;
                case "BookingRegistrasi"                       : include_once("./components/listbookingregistrasi.php"); break;
                case "SimpanBookingRegistrasi"                 : include_once("./components/simpanbookingregistrasi.php"); break;
                case "CekinRegistrasi"                         : include_once("./components/cekinregistrasi.php"); break;
                case "CekinRegistrasi2"                        : include_once("./components/cekinregistrasi2.php"); break;
                case "BuktiRegistrasi"                         : include_once("./components/buktiregistrasi.php"); break;
                case "BuktiRegistrasi2"                        : include_once("./components/buktiregistrasi2.php"); break;
                case "SuratSakit"                              : include_once("./components/listsuratsakit.php"); break;
                case "TampilSuratSakit"                        : include_once("./components/listtampilsuratsakit.php"); break;
                case "SuratHamil"                              : include_once("./components/listsurathamil.php"); break;
                case "TampilSuratHamil"                        : include_once("./components/listtampilsurathamil.php"); break;
                case "SuratBebasNarkoba"                       : include_once("./components/listsuratbebasnarkoba.php"); break;
                case "TampilSuratBebasNarkoba"                 : include_once("./components/listtampilsuratbebasnarkoba.php"); break;
                case "SuratRujuk"                              : include_once("./components/listsuratrujuk.php"); break;
                case "TampilSuratRujuk"                        : include_once("./components/listtampilsuratrujuk.php"); break;
                case "SuratCovid"                              : include_once("./components/listsuratcovid.php"); break;
                case "TampilSuratCovid"                        : include_once("./components/listtampilsuratcovid.php"); break;
                case "SuratKontrol"                            : include_once("./components/listsuratkontrol.php"); break;
                case "TampilSuratKontrol"                      : include_once("./components/listtampilsuratkontrol.php"); break;
                case "Perpustakaan"                            : include_once("./components/listperpustakaan.php"); break;
                case "AntrianPemeriksaanLab"                   : include_once("./components/listriwayatlaborat.php"); break;
                case "KartuPasien"                             : include_once("./components/listkartu.php"); break;
                case "TampilPermintaanLab"                     : include_once("./components/listtampilpermintaanlab.php"); break;
                case "TampilHasilLab"                          : include_once("./components/listtampilhasillab.php"); break;
                default                                        : include_once("./components/homeuser.php");
            }
        }
            
    }
	
    function actionMenu() {
        $aksi=isset($_REQUEST['act'])?$_REQUEST['act']:"Home";
        if (!cekSessiPasien()) {
            if($aksi=="Home"){
                echo "<li><a href='#top' class='smoothScroll'>Home</a></li>
                     <li><a href='#about' class='smoothScroll'>Tentang Kami</a></li>
                     <li><a href='#team' class='smoothScroll'>Dokter Kami</a></li>
                     <li><a href='#news' class='smoothScroll'>Jadwal Praktek</a></li>
                     <li><a href='index.php?act=FasilitasKamar' class='smoothScroll'>Fasilitas & Tarif</a></li>
                     <li class='appointment-btn'><a href='#appointment'>Buat Janji/Booking</a></li>";
            }else if(($aksi=="FasilitasKamar")||($aksi=="FasilitasRadiologi")||($aksi=="FasilitasLaborat")||($aksi=="FasilitasOperasi")||($aksi=="FasilitasOnline")){
                echo "<li><a href='index.php?act=Home'>Home</a></li>
                     <li><a href='index.php?act=FasilitasKamar' class='smoothScroll'>Kamar</a></li>
                     <li><a href='index.php?act=FasilitasRadiologi' class='smoothScroll'>Radiologi</a></li>
                     <li><a href='index.php?act=FasilitasLaborat' class='smoothScroll'>Laborat</a></li>
                     <li><a href='index.php?act=FasilitasOperasi' class='smoothScroll'>Operasi</a></li>
                     <li><a href='index.php?act=FasilitasOnline' class='smoothScroll'>Konsultasi Online</a></li>
                     <li class='appointment-btn'><a href='index.php?act=Home#appointment'>Buat Janji/Booking</a></li>";
            }else{
                echo "<li><a href='index.php?act=Home#top' class='smoothScroll'>Home</a></li>
                     <li><a href='index.php?act=Home#about' class='smoothScroll'>Tentang Kami</a></li>
                     <li><a href='index.php?act=Home#team' class='smoothScroll'>Dokter Kami</a></li>
                     <li><a href='index.php?act=Home#news' class='smoothScroll'>Jadwal Praktek</a></li>
                     <li><a href='index.php?act=FasilitasKamar' class='smoothScroll'>Fasilitas & Tarif</a></li>
                     <li class='appointment-btn'><a href='index.php?act=Home#appointment'>Buat Janji/Booking</a></li>";
            }
        }
    }
 
?>
