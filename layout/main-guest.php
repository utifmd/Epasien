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
    // include "./layout/section/index/gallery.php";
    // include "./layout/section/index/faq.php";
    // include "./layout/section/index/testimonial.php"
    include "./layout/section/index/contact.php"; 
    include "./layout/footer.php"; ?>
  </main> <!-- End #main -->

  <?php include "./layout/dep-script.php"?>
</body>
</html>