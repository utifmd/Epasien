<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Registrasi (Booking) Online</h2> <!--Buat Janji-->
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
    <form action="./forms/appointment.php" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="assets/img/departments-1.jpg" width="100%" alt="departments-1">
            </div>
            <div class="col-md-8">
                <div class="form-row">
                    <div class="col-md-8 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Tolong isi paling tidak 4 karakter">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Tolong isi alamat email yang valid">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <input pattern="[0-9]{1,40}" maxlength="40" placeholder="Nomor HP/Telephone Anda" type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Tolong isi paling tidak 4 karakter 0-9 (Maksimal 40 karakter)">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input id="date" type="datetime" name="date" class="form-control datepicker" placeholder="Tanggal Janji" data-rule="minlen:4" data-msg="Tolong isi paling tidak 4 karakter">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <select name="department" id="department" class="form-control">
                    <?php $query_poli = bukaquery("SELECT * FROM poliklinik WHERE status='1' ORDER BY nm_poli");
                        while($resource = mysqli_fetch_array($query_poli)) 
                            echo "<option value=".$resource[0].">".$resource[1]."</option>"; ?>
                        </select>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 form-group">
                        <div class="form-group">
                            <textarea class="form-control" name="address" rows="5" placeholder="Alamat Rumah"></textarea>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan Khusus (Jika Ada)"></textarea>
                            <div class="validate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <!-- <div class="loading">Loading</div> -->
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="container text-center">
            <button class="mb-3" type="submit" name="register">Daftar</button>
            <br/>
            <a href="./pages/?page=<?php echo urlencode("Check Booking Status")?>" target='_blank'>Check Booking Status</a>
        </div>
    </form>
    </div>
</section> 