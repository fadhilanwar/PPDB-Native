
<style>

.satu{
    /* background-color: red; */
    
}

</style>

<div class="contenti">
    <h2>
        Masukan Ke Kelas
    </h2>
    <form method="post" action="../edit-kelas-aksi.php">

        <div class="main-contenti">

            

            
        
        <?php
    
    include'../../koneksi.php';
    $id = $_GET['idpendaftaran'];
    $data = mysqli_query($koneksi,"Select * from t_daftar where idpendaftaran='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>
        
        <tr>

        <div class="satu">

        <div class="satu-1">

            <b>ID Pendaftaran</b>
            <br>
            <input style="display: none ;" type="text" name="id" value="<?php echo $d['idpendaftaran'];?>">
            <?php echo $d['idpendaftaran'];?>
            <br>
            <br>
            

            <!-- NIS
            <br>
            <input type="text" name="nis">
            <br>

            NIK
            <br>
            <input type="text" name="nik">
            <br> -->
            <b>Jenis Kelamin</b>
            <br>
            <input style="display: none;" type="text" name="jeniskelamin" value="<?php echo $d['jeniskelamin'];?>">
            <?php echo $d['jeniskelamin'];?>
            <br>
            <br>

            
            

            <b>Nama Peserta</b>
            <br><div style="    text-decoration: underline;">
            <input style="display: none ;" type="text" name="nama" value="<?php echo $d['namapendaftar'];?>">
            <?php echo $d['namapendaftar'];?>
            <br></div>
            <br>
        </div>

        <div class="satu-2">

            

            <b>Pilihan Jurusan</b>
            <br>
            <input style="display: none;" type="text" name="jurusan" value="<?php echo $d['jurusan'];?>">
            <?php echo $d['jurusan'];?>
            <br>
            <br>
    
            Tentukan Kelas
            <br>
            <select class="select-jurusan" name="idkelas">
                <option disabled selected>- Pilih Kelas -</option>
                <option>X RPL A</option>
                <option>X RPL B</option>
                <option>X RPL C</option>
                <option>X RPL D</option>
    
                <option>X TEI A</option>
                <option>X TEI B</option>
    
                <option>X TKJ A</option>
                <option>X TKJ B</option>
    
                <option>X TP A</option>
                <option>X TP B</option>
    
                
            </select>
            <br>

            <div class="beri-kelas" style="display: flex;">

                <input class="btn-submit-petugas" type="submit" value="Simpan" style="margin-top: 20px;">
                <a href="admin.php?page=kelas">
                <div class="btn-cancel">
                    Back
                </div>
            </a>
            </div>
    
        </div>




                 


            </div>
            
            

        </tr>
    </table>
    <?php
    }
    ?>

        </div>
           

        </div>
</form>





</div>
