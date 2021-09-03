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
<?php
  $services_one = array("Kamar Rawat Bayi", "Kamar Rawat Bersalin", "Kamar Rawat Ibu", "Kamar Rawat Operasi");
  $services_two = array("Ambulance", "Baby Spa", "Farmasi", "Fasilitas Umum", "Home Care", "ICU", "IGD", "NICU", "Pendaftaran / Layanan Klien", "Usg 3D/4D");

  switch ($_GET['service']) {
    case 'first':
        $boxes = $services_one; break;
    default:
        $boxes = $services_two; break;
  } ?>
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Halaman <?php echo $_GET['page']?></h2>
          <ol>
            <li><a href="../">Home</a></li>
          <?php 
            if(isset($_GET['service'])) 
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
                <h4><a href="?page=<?php echo $boxes[$i]; ?>"><?php echo $boxes[$i]; ?></a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
        <?php } ?>
          </div>
        </div>
      </section>
    <?php } else { ?>
      <div class="container">
        <div class="row">
          <p>Example <?php echo $_GET['page'] ?> template</p>
        </div>
      </div>
    <?php } ?>
    </section>
  </main><!-- End #main -->
  <?php 
    include "../layout/footer.php";
    include "../layout/dep-script.php"; ?>
</body>
</html>