<?php
    ob_start();
    session_start();
    date_default_timezone_set('Asia/Jakarta');
    require_once('../conf/command.php');
    require_once('../conf/conf.php');
    require_once('../data/index.php');
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    if(isset($_GET['page'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RSIA Fadhila  - <?php echo $_GET['page'] ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <?php include "../layout/dep-link.php" ?>
</head>
<body>
<?php include "../layout/header.php" ?> 
<?php switch ($_GET['service']) {
  case 'first':
      $boxes = $data['service-one']; break;
  default:
      $boxes = $data['service-third']; break;
} ?>
  
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Halaman <?php echo $_GET['page']?></h2>
          <ol>
            <li><a href="../">Home</a></li>
          <?php if(isset($_GET['service'])) 
              echo "<li><a href=\"../#services\">Layanan</a></li>";
            else if(isset($_GET['department']))
              echo "<li><a href=\"../#services\">Poliklinik</a></li>"; ?>
            <li><?php echo $_GET['page'] ?></li>
          </ol>
        </div>
      </div>
    </section>

    <section class="inner-page">
    <?php if(isset($_GET['service'])){ ?>
      <section id="services" class="services">
        <div class="container">
          <div class="row">
        <?php for($i = 0; $i < count($boxes); $i++){ ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom:2em">
              <div class="icon-box">
                <div class="icon"><i class="icofont-heart-beat"></i></div>
                <h4><a href="?page=<?php echo urlencode($boxes[$i]['title']) ?>&data=<?php echo tokenizeData($boxes[$i]) ?>"><?php echo $boxes[$i]['title']?></a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
        <?php } ?>
          </div>
        </div>
      </section>
    <?php } else { ?>
      <?php switch ($_GET['page']) {
        case urldecode("Jadwal Dokter"): 
          include "../layout/section/inner/doctor-schedule.php"; break;
        case urldecode("Dokter Detail"): 
          include "../layout/section/inner/doctor-detail.php"; break; /*case "Sejarah": include "../layout/section/inner/company-profile.php"; break;*/
        case urldecode("Booking Success"): 
          include "../layout/section/inner/booking-success.php"; break;
        case urldecode("Check Booking Status"): 
          include "../layout/section/inner/check-booking.php"; break;
        case urldecode("Semua Dokter"): 
          include "../layout/section/inner/whole-doctor.php"; break;
        case urldecode("Visi & Misi"):
          include "../layout/section/inner/vision-mission.php"; break;
        case urldecode("Kerja Sama"):
          include "../layout/section/inner/cooperation.php"; break;
        case urldecode("Why Choose Us"):
          include "../layout/section/inner/why-choose-us.php"; break;
        default: if(isset($_GET['data']))
            include "../layout/section/inner/index.php";
          else echo "Empty"; break; }} ?>
    </section>
  </main> <!-- End #main -->
  <?php 
    include "../layout/footer.php";
    include "../layout/dep-script.php"; ?>
</body>
</html>
<?php } else echo "page not found."; ?>