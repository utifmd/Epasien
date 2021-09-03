<!-- ======= Doctor-Schedule Section ======= -->
<section id="doctor-schedule" class="doctor-schedule">
    <div class="container">
        <div class="section-title">
            <h2>Jadwal Praktek Dokter</h2>
        </div>
        <div class="container-fluid">
            <div class="row no-glutters">
                <div class="col-md-12 col-sm-12">
                    <form id="carikeyword" name="frmCariJadwal" method="post" action="" enctype=multipart/form-data>
                        <table width="100%" border='0' align="center">
                            <tr class="head">
                                <td width="20%" align="right"><label for="keyword">Keyword</label></td>
                                <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                <td width="60%"><input name="keyword" type="text" id="keyword" pattern="[a-zA-Z0-9, ./@_]{1,65}" title=" a-zA-Z0-9, ./@_" class="form-control" value="" size="65" maxlength="250" autocomplete="off"/></td>
                                <td width="19%" align="left">&nbsp;<input name="BtnKeyword" type=submit class="btn btn-warning" value="Cari"></td>
                            </tr>
                        </table>
                    </form>
                    <div id='hasilcari'></div>
                </div>
            </div>
        </div>
    </div>
</section>