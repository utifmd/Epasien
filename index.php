<?php
    ob_start();
    session_start();
    date_default_timezone_set('Asia/Jakarta');
    require_once('./conf/command.php');
    require_once('./conf/conf.php');
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
    if(!isset($_SESSION["nama_instansi"])){
        $querypengaturan = bukaquery("select * from setting");
        while($pengaturan = mysqli_fetch_array($querypengaturan)) {
            $_SESSION["nama_instansi"] = $pengaturan["nama_instansi"];
            $_SESSION["alamat_instansi"] = $pengaturan["alamat_instansi"];
            $_SESSION["kabupaten"] = $pengaturan["kabupaten"];
            $_SESSION["propinsi"] = $pengaturan["propinsi"];
            $_SESSION["kontak"] = $pengaturan["kontak"];
            $_SESSION["email"] = $pengaturan["email"];
            $_SESSION["kode_ppk"] = $pengaturan["kode_ppk"];
            $_SESSION["kode_ppkinhealth"] = $pengaturan["kode_ppkinhealth"];
            $_SESSION["kode_ppkkemenkes"] = $pengaturan["kode_ppkkemenkes"];
        }
    }
    
    /*
    if(!isset($_SESSION["ses_pasien"])){
        include_once "indexpengunjung.php";
    }else{
        include_once "indexuser.php";
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>RSIA Fadhila - Beranda</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <?php include "./layout/dep-link.php" ?>
</head>

<body>
  <?php include "./layout/header.php" ?>
  <?php include "./layout/section/index/hero.php"?>

  <main id="main"> <?php 
    include "./layout/section/index/why-us.php";
    include "./layout/section/index/about.php";
    include "./layout/section/index/count.php";
    include "./layout/section/index/service.php";
    include "./layout/section/index/appointment.php";
    include "./layout/section/index/department.php";
    include "./layout/section/index/doctor.php";
    include "./layout/section/index/faq.php";
    /* include "./layout/section/index/testimonial.php" */ 
    include "./layout/section/index/gallery.php";
    include "./layout/section/index/contact.php"; 
    include "./layout/footer.php"; ?>
  </main> <!-- End #main -->

  <?php include "./layout/dep-script.php"?>
</body>
</html>