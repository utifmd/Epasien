<!-- ======= Doctor-Schedule Section ======= -->
<section id="doctor-schedule" class="doctor-schedule">
    <div class="container">
        <div class="section-title">
            <h2>Jadwal Praktek Dokter</h2>
        </div>
        <div class="container-fluid">
            <div class="row no-glutters table-responsive">
                <table class="table table-hover">
                    <tr class="text-align-center">
                        <th>Hari Kerja</th>
                        <th>Nama Dokter</th>
                        <th>Poliklinik</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                    </tr>
                <?php
                $query = bukaquery("SELECT 
                    dokter.nm_dokter,
                    jadwal.hari_kerja,
                    jadwal.jam_mulai,
                    jadwal.jam_selesai,
                    poliklinik.nm_poli 
                    FROM jadwal 
                    INNER JOIN poliklinik 
                    INNER JOIN dokter 
                    ON jadwal.kd_dokter=dokter.kd_dokter 
                    AND jadwal.kd_poli=poliklinik.kd_poli 
                    WHERE dokter.status='1'
                    ORDER BY jadwal.hari_kerja, jadwal.kd_dokter DESC LIMIT 10"); //".(isset($keyword)?" and (dokter.nm_dokter like '%$keyword%' or jadwal.hari_kerja like '%$keyword%' or poliklinik.nm_poli like '%$keyword%')":"")." 
                while ($resource = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo ucwords($resource['hari_kerja'])?></td>
                        <td><?php echo ucwords($resource['nm_dokter'])?></td>
                        <td><?php echo $resource['nm_poli']?></td>
                        <td><?php echo $resource['jam_mulai']?></td>
                        <td><?php echo $resource['jam_selesai']?></td>
                    </tr>
                <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>