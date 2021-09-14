<?
if(isset($_GET['name']))
    echo header("Location: ./");
?>
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Kontak</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
    </div>
    <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.772179630456!2d100.581738!3d-0.4540411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x557a74502906c9af!2sRSIA%20Fadhila!5e0!3m2!1sid!2sid!4v1630240341172!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe> <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.772179630456!2d100.581738!3d-0.4540411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x557a74502906c9af!2sRSIA%20Fadhila!5e0!3m2!1sid!2sid!4v1630240341172!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
            <div class="info">
                <div class="address">
                    <i class="icofont-google-map"></i>
                    <h4>Location:</h4>
                    <p>Koto baranjak, Limo Kaum Sumatera Barat 27213</p>
                </div>
                <div class="email">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>rsiafadhila@gmail.com</p>
                </div>
                <div class="phone">
                    <i class="icofont-phone"></i>
                    <h4>Call:</h4>
                    <p> +62 82391 5121 21</p>
                </div>
            </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"></div> -->
            <form>
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input id="txt_contact_name" type="text" name="name" class="form-control" id="name" placeholder="Your Name" required data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    </div>
                    <div class="col-md-6 form-group">
                        <input id="txt_contact_email" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required data-rule="email" data-msg="Please enter a valid email" />
                    </div>
                </div>

                <div class="form-group">
                    <input id="txt_contact_subject" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                </div>
                <div class="form-group">
                    <textarea id="txt_contact_message" class="form-control" name="message" rows="5" data-rule="required" required data-msg="Please write something for us" placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn appointment-btn m-0" onClick="sendMail()">Kirim Pesan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    getIdValue = (id) => document.getElementById(id).value
    sendMail = () => {
        let sender = getIdValue('txt_contact_name'),
            email = getIdValue('txt_contact_email'), 
            subject = getIdValue('txt_contact_subject'), 
            message = getIdValue('txt_contact_message');
            
        if(sender !== '' && email !== '' &&  subject !== '' && message !== '')
            window.location.href = `mailto:rsiafadhila@gmail.com?subject=${subject} - ${sender} (${email})&body=${message}`
        // alert(`mailto:utifmd@gmail.com?subject=${subject} - ${sender} (${email})&body=${message}`);
        
}
</script>