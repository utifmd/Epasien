<section id="booking" name="booking">
    <div class="container-fluid-sm container">
        <?php if(isset($_SESSION['regis_number'])) { $regis_number = $_SESSION['regis_number']; ?>
            <div class="section-title">
                <h2>Registrasi <?php echo "(Booking) Online ".$app_name?></h2>
            </div>
            <div class="alert alert-info">
                Catatan : Nomor booking wajib anda ingat. Nomor booking bukan merupakan nomor pendaftaran poliklinik/unit. Kami akan melakukan pengecekan terhadap jadwal & kuota dokter yang tersedia berdasarkan booking Anda. Konfirmasi booking periksa akan Kami sampaikan melalui E-Mail atau Nomor HP/Telp Anda.
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-striped m-3">
                        <tr><th>No. Booking</th><td>: <?php echo $regis_number?></td></tr>
                        <tr><th>Tgl. Booking</th><td>: <?php echo $_SESSION['current_date']?></td></tr>
                        <tr><th>Tgl. Periksa</th><td>: <?php echo $_SESSION['selected_date']?></td></tr>
                        <tr><th>Nama</th><td>: <?php echo $_SESSION['name']?></td></tr>
                        <tr><th>No. Hp/Telp</th><td>: <?php echo $_SESSION['phone']?></td></tr>
                        <tr><th>E-Mail</th><td>: <?php echo $_SESSION['email']?></td></tr>
                        <tr><th>Alamat</th><td>: <?php echo $_SESSION['address']?></td></tr>
                        <tr><th>Unit/Poliklinik</th><td>: <?php echo $_SESSION['department']?></td></tr>
                    </table> 
                </div>
            </div>
            <div class="text-center align-items-center justify-content-center">
                <a class='btn appointment-btn m-auto' href="<?php echo $project_dir?>components/CetakBooking.php?iyem='<?php echo encrypt_decrypt("{\"nobooking\":\"$regis_number\"}","e");?>'" target='_blank'>Cetak</a>
            </div>
        <?php } else { echo "Page not found."; } ?>
    </div>
</section>

<?php // session_destroy(); ?>