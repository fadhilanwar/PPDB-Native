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


<div class="content">
    <h3 style="font-family = Cursive;">
        Tambah Siswa
    </h3>
    <form method="post" action="../tambah-aksi.php">

        <div class="main-contenti">

            <div class="satu-sat">
                <b>ID Pendaftaran</b>
                <br>
                <input type="text" name="id" value="<?php echo $kodeDaftar ?>" style="display: none;">
                <div class="wrap-id" style="text-decoration: underline;"><?php echo $kodeDaftar ?></div>
                <br>

                <!-- NIS
                <br>
                <input type="text" name="nis">
                <br>

                NIK
                <br>
                <input type="text" name="nik">
                <br> -->

                Nama Siswa
                <br>
                <input type="text" name="nama" autocomplete="off">
                <br>

                Asal Sekolah
                <br>
                <input type="text" name="asalsekolah" autocomplete="off">
                <br>


                Jurusan
                <br>
                <select class="select-jurusan" name="jurusan" autocomplete="off">
                <option disabled selected>- Pilih Jurusan -</option>

                    <option>1. Rekayasa Perangkat Lunak</option>
                    <option>2. Teknik Komputer dan Jaringan</option>
                    <option>3. Teknik Elektronika Industri</option>
                    <option>4. Teknik Pendingin dan Tata Udara</option>
                </select>
                <br>

                Agama
                <br>
                <select class="select-jurusan" name="agama" autocomplete="off">
                <option disabled selected>- Pilih Agama -</option>
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
                <input class="alamat" type="text" name="alamat" autocomplete="off">
                <br>


            </div>

            <div class="dua-s">


                Jenis Kelamin
                <br>
                <select name="jk">
                <option disabled selected>- Pilih Gender -</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
                <br>

                Nama Ayah
                <br>
                <input type="text" name="namaayah" autocomplete="off">
                <br>
                
                Nama Ibu
                <br>
                <input type="text" name="namaibu" autocomplete="off">
                <br>
                
                No TLP
                <br>
                <input type="text" name="notlp" autocomplete="off">
                <br>
                
                <input class="btn-submit" type="submit" value="Simpan" style="margin-top: 20px;">

                
            </form>

            </div>
        <div class="tabel-sisi">
        
    <!-- <img src="../../icon/Polygon Luminary.svg" width="750px" alt=""> -->

        </div>
           

        </div>





</div>