<?php
  session_start();
  require_once('../conf/conf.php'); // require_once('../conf/command.php');

  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['department'])){
      $name = $_POST['name']; $email = $_POST['email']; $address = $_POST['address']; $phone = $_POST['phone']; 
      $date = $_POST['date']; $message = $_POST['message']; $department = $_POST['department'];
      $day = explode("/", $date)[1]; $month = explode("/", $date)[0]; $year = explode("/", $date)[2];
      $current_date = date("Y-m-d H:i:s");
      $interval = getOne2("SELECT (TO_DAYS('$year-$month-$day')-TO_DAYS('$current_date'))"); // echo "Poliklinik ".$department." | Nama ".$name." | Email ".$email." | Alamat ".$address." | Telfon ".$phone." | Tanggal ". explode("/", $date)[1]." | Bulan ". explode("/", $date)[0]." | Tahun ". explode("/", $date)[2]." | Pesan ".$message;
      if($interval > 0){ 
        
        $max_id_order = getOne2("SELECT IFNULL(MAX(CONVERT(RIGHT(no_booking,4),signed)),0)+1 FROM booking_periksa WHERE tanggal='$year-$month-$day'");
        $regis_number = "BP$year$month$day".sprintf("%04s", $max_id_order);
        $query_insert = Tambah4("booking_periksa"," '$regis_number','$year-$month-$day','$name','$address','$phone','$email','$department','$message','Belum Dibalas','$current_date'"); // $query_insert = Tambah4("booking_periksa"," '$regis_number','$year-$month-$day','$name','$address','$phone','$email','$department','$message','Belum Dibalas','$current_date'");
        $query_department = getOne("SELECT nm_poli FROM poliklinik WHERE kd_poli='$department'");
        
        if($query_insert){ // && $query_department
          $_SESSION['regis_number'] = $regis_number;
          $_SESSION['current_date'] = $current_date;
          $_SESSION['selected_date'] = "$day-$month-$year";
          $_SESSION['name'] = $name;
          $_SESSION['phone'] = $phone;
          $_SESSION['email'] = $email;
          $_SESSION['address'] = $address;
          $_SESSION['department'] = $query_department;
          
          echo "<script>window.location.href='./pages/?page=".urlencode("Booking Success")."'</script>"; 
        }else{ echo "<div>
          <h3>Maaf, Nomor HP/Telp yang Anda gunakan untuk melakukan booking terdeteksi sudah digunakan sebelumnya pada tanggal yang sama jika anda sudah melakukan booking sebelumnya</h3><br />
            <a class=\"btn appointment-btn\" href=\"".$project_dir."/pages/?page=".urlencode("Check Booking Status")."\">Check Booking Status</a>
          </div>";
        }
      } else { 
        echo "<h3>Maaf, Anda hanya bisa booking minimal 1 hari kedepan."; // echo $_POST['name']."-".$_POST['address']; // if(isset($_POST['register'])){ //   echo "register triggered."; // }else //   echo "There is no post."
      }
  } else { 
    echo "<h3>Maaf, Semua field wajib diisi.";
  } ?>