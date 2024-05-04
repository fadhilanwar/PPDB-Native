<div class="content">
    <h3 style="font-family = Cursive; text-decoration: underline;">
        Data Pendaftar
    </h3>
    <div class="wrapper-edit">
        <div class="tiga">

            <h2>Informasi Calon Pendaftar</h2>
            <div class="bag-info">

                <?php
    
    include'../../koneksi.php';
    $id = $_GET['idpendaftaran'];
    $data = mysqli_query($koneksi,"Select * from t_daftar WHERE idpendaftaran='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>
                <table style="border: none;">
                    <tr>
                        <td><b>ID Pendaftaran</b></td>
                        <td><b>: <?php echo $d['idpendaftaran'];?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo $d['namapendaftar'];?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>: <?php echo $d['asalsekolah'];?></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: <?php echo $d['jurusan'];?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: <?php echo $d['agama'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?php echo $d['alamat'];?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: <?php echo $d['jeniskelamin'];?></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>: <?php echo $d['namaayah'];?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>: <?php echo $d['namaibu'];?></td>
                    </tr>
                    <tr>
                        <td>No TLP</td>
                        <td>: <?php echo $d['notlp'];?></td>
                    </tr>
                </table>


                <?php
    }
        ?>




            </div>






        </div>
        <div class="area-edit">
            <h2>Edit</h2>
            <?php
        include '../../koneksi.php';
        $id = $_GET['idpendaftaran'];
        $data = mysqli_query($koneksi,"SELECT * FROM t_daftar WHERE idpendaftaran='$id'");

        while ($d = mysqli_fetch_array($data)) {
            ?>
            <form method="post" action="../edit-aksi.php">
                <table>
                    <tr style="display: none;">
                        <td>ID Pendaftaran</td>
                        <td><input type="text" name="idpendaftaran" value="<?php echo $d['idpendaftaran']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Pendaftar</td>
                        <td><input type="text" name="nama" value="<?php echo $d['namapendaftar'];?>"></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td><input type="text" name="asalsekolah" value="<?php echo $d['asalsekolah'];?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select value="<?php echo $d['jeniskelamin'];?>" name="jeniskelamin">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>
                            <select value="<?php echo $d['jurusan'];?>" name="jurusan">
                                <option>1. Rekayasa Perangkat Lunak</option>
                                <option>2. Teknik Komputer dan Jaringan</option>
                                <option>3. Teknik Elektronika Industri</option>
                                <option>4. Teknik Pendingin dan Tata Udara</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <select value="<?php echo $d['agama'];?>" name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Kong Hucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat'];?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td><input type="text" name="namaayah" value="<?php echo $d['namaayah'];?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td><input type="text" name="namaibu" value="<?php echo $d['namaibu'];?>"></td>
                    </tr>
                    <tr>
                        <td>No TLP</td>
                        <td><input type="text" name="notlp" value="<?php echo $d['notlp'];?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn-submit" type="submit" value="Ubah"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
    ?>
        </div>
    </div>
</div>
