<?php if(!empty($_POST['regis_num']) && !empty($_POST['regis_pwd'])) funCheckListener(); ?>
<section id="appointment" class="appointment">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $_GET['page']." ".$app_name?></h2> <!--Buat Janji-->
        </div>
        <div class="alert alert-info">Jika anda pasien lama atau pernah berobat sebelumnya, untuk nomor rekam medis dan password login bisa Anda tanyakan kepada petugas Kami saat Anda melakukan registrasi secara offline. Dan password bisa Anda ubah setelah login di aplikasi ini. Jika Anda pasien baru dan belum pernah periksa sebelumnya, silahkan melakukan booking atau buat janji melalui menu utama ini ini. Setelah admin kami melakukan verifikasi data, Anda akan mendapat password login dan antrian periksa sesuai booking Anda.</div><br /><br />
        <form class="text-center" method="post" role="form" class="custom-form">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 form-col">
                    <div class="form-group">
                        <input type="text" required name="regis_num" class="form-control" id="regis_num" placeholder="No. Rekam Medis" data-rule="minlen:4" data-msg="Tolong isi paling tidak 4 karakter">
                    </div>
                    <div class="form-group">
                        <input type="password" required name="regis_pwd" class="form-control" id="regis_pwd" placeholder="Password" data-rule="password" data-msg="Tolong isi pasword registrasi yang valid">
                    </div>
                    <input class="appointment-btn btn m-auto mt-3" type="submit" value="Sign in" />
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
    $regis_num = cleankar($_POST["regis_num"]);
    $regis_pwd = cleankar2($_POST["regis_pwd"]);

    if(getOne2("SELECT COUNT(*) FROM personal_pasien WHERE no_rkm_medis='$regis_num' AND password = aes_encrypt('$regis_pwd','windi')") > 0){
        $_SESSION["ses_pasien"] = encrypt_decrypt($regis_num, "e");
        exit(header("Location: ../index.php")); // echo "<script>alert('$regis_num $regis_pwd')</script>";
    }else echo layoutAlert("Mohon maaf", "Kesalahan pada query");
}

function funLoginRejected($reply){
    echo layoutAlert("Mohon maaf", "Maaf, gagal login. Nomor rekam medis atau password ada yang salah");
}

function funLoginAccepted($regis_num, $reply){
    echo layoutAlert("Mohon maaf", "sedang terjadi kesalahan pada server.");
} ?>