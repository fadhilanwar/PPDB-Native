<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../model/model-siswa.css">
    <link rel="stylesheet" href="../../model/model-admin.css">
    <title>Rekap Seleksi Siswa</title>
</head>
<body>

<div class="wrapper-status">

    
    <div class="top-header">

<div class="logo">
    <img src="../../icon/smk-logo.png" alt="">
</div>

<div class="information">
    <!-- <h2>Penerimaan Peserta Didik Baru</h2>
            <h1>SMK TI Pembangunan Cimahi</h1> -->
            PEMERINTAH DAERAH PROVINSI JAWA BARAT<br>
    DINAS PENDIDIKAN<br>
    

    <b>SMK TEKNOLOGI INDUSTRI PEMBANGUNAN CIMAHI</b><br>
    


    
</div>

<div class="jarak">
    <table border="0">
        <div>
            <tr>
                <td> <img src="../../icon/mark-map.png" alt=""></td>
                <td>: Cimahi, JL. H. Bakar, Kec. Cimahi Selatan</td>
            </tr>
        </div>

        <div>
            <tr>
                <td> <img src="../../icon/email.png" alt="">
                </td>
                <td>: smktip_cimahi@yahoo.co.id</td>
            </tr>
            
        </div>
        
        <div>
            <tr>
                <td><img src="../../icon/call.png" alt=""></td>
                <td>: (022) 6629586 / WA : +6285293939191</td>
            </tr>
            

        </div>

    </table>
</div>


</div>

<hr style="border: 1px solid black;">
<div class="top-status">

    <strong>REKAP STATUS PENERIMAAN SISWA</strong>
    <br>
    PPDB SMKTIP 2022-2023
</div>

<div class="wrapper-status-isi">
    <table class="tbl-siswa-status" border="1">
    <tr>
                <th>ID Pendaftaran</th>
                <th>Nama</th>

               
                <th>Jenis Kelamin</th>
                <th>Status</th>
    </tr>
<?php
    
    include'../../koneksi.php';
    $data = mysqli_query($koneksi,"SELECT t_nilai.*, t_statuspenerimaan.nama, t_statuspenerimaan.jeniskelamin, t_statuspenerimaan.status FROM t_nilai INNER JOIN t_statuspenerimaan ON t_nilai.idpendaftaran = t_statuspenerimaan.idpendaftaran;");

    while ($d = mysqli_fetch_array($data)) {
        ?>
    <tr>
        <td><?php echo $d['idpendaftaran'];?></td>
        <td class="status-specified"><?php echo $d['nama'];?></td>
        <td><?php echo $d['jeniskelamin'];?></td>
        
        <td style="font-weight: 700;"><?php echo $d['status'];?></td>
        
    </tr>
            <?php

    }
            ?>
    </table>
</div>


</div>
</body>
</html>

<script>
    window.print();
</script>