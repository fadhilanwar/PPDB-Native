
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registrasi Calon Siswa</title>

    <link rel="stylesheet" href="../../model/model-register.css">
</head>

<body>

    <?php

include '../../koneksi.php';

$query = mysqli_query($koneksi,"SELECT max(idpendaftaran)as KodeTerbesar FROM t_daftar");
$data = mysqli_fetch_array($query);
$kodeDaftar = $data['KodeTerbesar'];

$urutan = (int) substr($kodeDaftar, 3, 3);
$urutan++;


$huruf = "DFT";
$kodeDaftar = $huruf . sprintf("%03s", $urutan);

// echo $kodeDaftar;


?>


    <div class="left">
        <marquee>Selamat Datang ! Calon Peserta Didik SMK TI Pembangunan</marquee>
    </div>
    <div class="right">
        
        <div class="judul" style="display: flex;">
            
            <div class="logo-wrap">
    <img src="../../icon/SmktipHQ.png">
            </div>
            <div class="kartu">
                
            <div class="info-form">

                <h3>Formulir Pendaftaran</h3>

            </div>
                <div class="kartu-content">
                    <!-- <div class="kartu-judul">
                        LOGIN
                    </div> -->
                    <div class="input">
                        <form method="post" action="tambah-akun-aksi.php">

                            <div class="au" style="display: none;">
                                <b>ID Pendaftaran</b>
                                <br>
                                <input type="text" name="idpendaftaran" value="<?php echo $kodeDaftar ?>">
                                <br>

                            </div>



                            Nama Siswa
                            <br>
                            <input type="text" name="nama">
                            <br>

                            Asal Sekolah
                            <br>
                            <input type="text" name="asalsekolah">
                            <br>


                            Jurusan
                            <br>
                            <select class="select-jurusan" name="jurusan">
                            <option disabled selected>- Pilih Jurusan -</option>
                                <option>1. Rekayasa Perangkat Lunak</option>
                                <option>2. Teknik Komputer dan Jaringan</option>
                                <option>3. Teknik Elektronika Industri</option>
                                <option>4. Teknik Pendingin dan Tata Udara</option>
                            </select>
                            <br>

                            Agama
                            <br>
                            <select class="select-jurusan" name="agama">
                            <option disabled selected>- Pilih Kepercayaan -</option>
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Kong Hucu</option>


                            </select>   
                            <br>

                            Alamat
                            <br>
                            <input class="alamat" type="text" name="alamat">
                            <br>


                    </div>

                    <div class="dua">


                        Jenis Kelamin
                        <br>
                        <select name="jk">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                        <br>

                        Nama Ayah
                        <br>
                        <input type="text" name="namaayah">
                        <br>

                        Nama Ibu
                        <br>
                        <input type="text" name="namaibu">
                        <br>

                        No TLP
                        <br>
                        <input type="text" name="notlp">
                        <br>

                        <div class="button">
                            
                                <a class="btn-cancel" href="register-siswa.php?page=dash">Kembali</a>
                            

                            
                                <input class="btn" type="submit" value="Daftar !">
                           
    
                        </div>


                        </form>
                    </div>
                    
                </div>
            </div>

        </div>
        
    </div>
    <p style="font-size: 12px; margin-left: 10px;">*Pastikan Data yang di-input Benar dan memenuhi Persyaratan</p>
</body>

</html>