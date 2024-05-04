<div class="content">
    <h3>Ini, Halaman daftar Siswa</h3>
    
    <div class="area-input-nilai">


                <form method="post" action="../status-aksi.php">
                    <div class="header-area-input-nilai" style=" ">
                        Input Rata-rata Nilai Raport Semester
                    </div>
                    <div class="card-ident"> 
                    ID:
                    <?php $idpendaftar = $_SESSION['data2']['id'] ?>
            <?php
                
                include'../../koneksi.php';
                $data = mysqli_query($koneksi,"Select * from t_daftar where idpendaftaran='$idpendaftar'");

                if ($d = mysqli_fetch_array($data)) {
                ?>
                <b style="text-decoration: underlined;"><td><?php echo $d['idpendaftaran'];?></td></b>
                
                <br>
                <tr>
            <td>Nama:</td>
            <td><input style="display: none;" type="text" name="namapendaftar" value="<?php echo $d['namapendaftar'];?>"></td>
            <td><?php echo $d['namapendaftar'];?></td>
        </tr>
        <br>

        <tr>
            <td>Jenis Kelamin: </td>
            <td><input style="display: none;" type="text" name="jeniskelamin" value="<?php echo $d['jeniskelamin'];?>"></td>
            <td><?php echo $d['jeniskelamin'];?></td>
        </tr>
       
        <br>
        <br>
                    </div>

                    <div class="satu-sate">
                    


        

                <?php } ?>

                        <!-- <b>ID</b>
                        <br>
                        <input type="text" name="id">
                        <br> -->



                        Bahasa Indonesia
                        <br>
                        <input type="text" name="bahasaindonesia">
                        <br>

                        Bahasa Inggris
                        <br>
                        <input type="text" name="bahasainggris">
                        <br>


                       Matematika
                        <br>
                        <input type="text" name="matematika">
                        <br>
                        </div>
                    
                    <div class="dua">
                        

                        <input class="btn-submit-petugass" type="submit" value="Simpan" style="margin-top: 20px;">

                    </div>

                </form>
            </div>
</div>