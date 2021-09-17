<?php if(!empty($_POST['regis_num']) && !empty($_POST['phone_num']))
    funCheckListener(); /* else { echo "Field tidak boleh kosong.";} */  ?>
<section id="appointment" class="appointment">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $_GET['page']." ".$app_name?></h2> <!--Buat Janji-->
        </div>
        <form class="text-center" method="post" role="form" class="custom-form">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 form-col">
                    <div class="form-group">
                        <input type="text" required name="regis_num" class="form-control" id="regis_num" placeholder="No. Booking" data-rule="minlen:4" data-msg="Tolong isi paling tidak 4 karakter">
                    </div>
                    <div class="form-group">
                        <input type="tel" required name="phone_num" class="form-control" id="phone_num" placeholder="No. Telp" data-rule="phone" data-msg="Tolong isi No. Telp yang valid">
                    </div>
                    <input class="appointment-btn btn m-auto mt-3" type="submit" value="Check Status" />
                </div>
            </div>
        </form>
    </div>
</section> <?php 
    
function layoutAlert($title, $message){ return "
    <section id=\"booking\" name=\"booking\">
        <div class=\"container-fluid-sm container\">
            <div class=\"section-title\"><h2>".$title."</h2></div>
            <div class=\"alert alert-info\">".$message."</div>
        </div>
    </section>";
}

function funCheckListener(){
    $regis_number =  $_POST['regis_num'];
    $phone = $_POST['phone_num'];
    
    $query_check = bukaquery("SELECT COUNT(no_booking) AS noboking,
        IF(tanggal > current_date,'aman','kadaluarsa') AS tanggal, status 
        FROM booking_periksa 
        WHERE no_booking='$regis_number' AND no_telp='$phone'");
        
    if($resource = mysqli_fetch_array($query_check)){
        if($resource["noboking"] == 0){
            echo layoutAlert("Mohon maaf", "No booking tidak valid");
        }else if($resource["noboking"] > 0){ 
            if($resource["tanggal"] == "kadaluarsa"){
                echo layoutAlert("Mohon maaf", "Status pendaftaran anda sudah kadaluarsa, silahkan melakukan booking ulang.");
            }else{
                $reply = getOne2("SELECT balasan FROM booking_periksa_balasan WHERE no_booking='$regis_number'");

                switch ($resource["status"]) {
                    case "Belum Dibalas": funStatusNotReplyYet(); break;
                    case "Ditolak": funStatusRejected($reply); break;
                    case "Diterima": funStatusAccepted($regis_number, $reply); break;
                    default: echo "Default"; break;
                }
            }
        }else echo layoutAlert("Mohon maaf", "Kesalahan pada program.");
    }else echo layoutAlert("Mohon maaf", "Kesalahan pada query");
}

function funStatusNotReplyYet(){
    echo layoutAlert("Mohon menunggu", "booking Anda masih menunggu peninjauan dari admin Kami. Silahkan cek kembali beberapa saat lagi.");
}

function funStatusRejected($reply){
    echo layoutAlert("Mohon maaf", "booking Anda ditolak".($reply==""?"":". $reply").". Silahkan buat janji/booking kembali untuk tanggal/poli yang lain.");
}

function funStatusAccepted($regis_number, $reply){ // echo "funStatusAccepted";
    $query_check_accepted = bukaquery("SELECT booking_registrasi.tanggal_booking,
        booking_registrasi.jam_booking,
        booking_registrasi.no_rkm_medis,
        booking_periksa.nama,
        booking_periksa.alamat,
        booking_periksa.no_telp,
        booking_periksa.email,
        booking_registrasi.tanggal_periksa,
        dokter.nm_dokter,
        poliklinik.nm_poli,
        booking_registrasi.no_reg,
        aes_decrypt(personal_pasien.password,'windi') AS pass 
        FROM booking_registrasi 
        INNER JOIN dokter ON booking_registrasi.kd_dokter=dokter.kd_dokter 
        INNER JOIN poliklinik ON booking_registrasi.kd_poli=poliklinik.kd_poli 
        INNER JOIN booking_periksa_diterima ON booking_periksa_diterima.no_rkm_medis=booking_registrasi.no_rkm_medis 
        INNER JOIN booking_periksa ON booking_periksa_diterima.no_booking=booking_periksa.no_booking 
        INNER JOIN personal_pasien ON booking_registrasi.no_rkm_medis=personal_pasien.no_rkm_medis 
        WHERE booking_periksa.no_booking='".$regis_number."'");

    if($resource_accepted = mysqli_fetch_array($query_check_accepted)){ echo "
        <section id=\"booking\" name=\"booking\">
            <div class=\"container-fluid-sm container\">
                <div class=\"section-title\">
                    <h2>No. Booking ".$regis_number."</h2>
                </div>
                <div class=\"alert alert-info\">
                    Booking Anda diterima, admin Kami sudah melakukan verifikasi data Anda".($reply=="" ? "" : ".<br>$reply")."
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <table class=\"table table-striped m-3\">
                            <tr><th>Tgl. Booking</th><td>: ".$resource_accepted["tanggal_booking"]." ".$resource_accepted["jam_booking"]."</td></tr>
                            <tr><th>Tgl. Periksa</th><td>: ".$resource_accepted["tanggal_periksa"]."</td></tr>
                            <tr><th>No.Rekam Medis</th><td>: ".$resource_accepted["no_rkm_medis"]."</td></tr>
                            <tr><th>Nama Pasien</th><td>: ".$resource_accepted["nama"]."</td></tr>
                            <tr><th>No. Hp/Telp</th><td>: ".$resource_accepted["no_telp"]."</td></tr>
                            <tr><th>E-Mail</th><td>: ".$resource_accepted["email"]."</td></tr>
                            <tr><th>Alamat</th><td>: ".$resource_accepted["alamat"]."</td></tr>
                            <tr><th>Unit/Poliklinik</th><td>: ".$resource_accepted["nm_poli"]."</td></tr>
                            <tr><th>Dokter</th><td>: ".$resource_accepted["nm_dokter"]."</td></tr>
                            <tr><th>No.Antri Poli</th><td>: ".$resource_accepted["no_reg"]."</td></tr>
                            <tr><th>Password Login</th><td>: ".$resource_accepted["pass"]."</td></tr>
                        </table> 
                    </div>
                </div>
                <div class=\"text-center align-items-center justify-content-center\">
                    <a class=\"btn appointment-btn m-auto\" href=\"../components/CetakBooking.php?iyem=".encrypt_decrypt("{\"nobooking\":\"$regis_number\"}","e")."\" target=\"_blank\">Cetak</a>
                </div>
            </div>
        </section>";
        
    }else echo layoutAlert("Mohon maaf", "sedang terjadi kesalahan pada server.");
} ?>