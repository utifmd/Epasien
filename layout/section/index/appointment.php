<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Buat Janji</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
        <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-4 form-group">
            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
            <select name="department" id="department" class="form-control">
            <option value="">Select Department</option>
            <option value="Department 1">Poli Anak</option>
            <option value="Department 2">Poli Obgyn</option>
            <option value="Department 3">Poli Bedah</option>
            <option value="Department 3">Poli Gizi</option>
            <option value="Department 3">Fisioterapi</option>
            </select>
            <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
            <select name="doctor" id="doctor" class="form-control">
            <option value="">Pilih Dokter</option>
            <option value="Doctor 1">Doctor 1</option>
            <!-- <option value="Doctor 2">Doctor 2</option>
            <option value="Doctor 3">Doctor 3</option> -->
            </select>
            <div class="validate"></div>
        </div>
        </div>

        <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        <div class="validate"></div>
        </div>
        <div class="mb-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Ajukan</button></div>
    </form>

    </div>
</section><!-- End Appointment Section -->