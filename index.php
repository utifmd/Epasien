<?php
  ob_start();
  session_start();
  date_default_timezone_set('Asia/Jakarta');
  require_once('./conf/command.php');
  require_once('./conf/conf.php');
  require_once('./data/index.php');
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache"); 
  
  if(!isset($_SESSION["nama_instansi"])){
    $query_setting = bukaquery("SELECT * FROM setting");
    while($setting = mysqli_fetch_array($query_setting)) {
        $_SESSION["nama_instansi"] = $setting["nama_instansi"];
        $_SESSION["alamat_instansi"] = $setting["alamat_instansi"];
        $_SESSION["kabupaten"] = $setting["kabupaten"];
        $_SESSION["propinsi"] = $setting["propinsi"];
        $_SESSION["kontak"] = $setting["kontak"];
        $_SESSION["email"] = $setting["email"];
        $_SESSION["kode_ppk"] = $setting["kode_ppk"];
        $_SESSION["kode_ppkinhealth"] = $setting["kode_ppkinhealth"];
        $_SESSION["kode_ppkkemenkes"] = $setting["kode_ppkkemenkes"];
    }
  }

  if(isset($_SESSION["ses_pasien"]))
    include_once "./layout/main-patient.php";
  else 
    include_once "./layout/main-guest.php"; ?>