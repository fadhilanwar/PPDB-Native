<div class="content">

    <h2>Data Kelas</h2>
    <div class="wrap-kelas">

        <div class="wrap-search-kelas">



            <form class="search" action="" method="post">
                <select name="CMBCARI" style="width: 170px;">

                    <option disabled selected>- Cari Kelas -</option>
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
                <input class="btn-search" type="submit" value="Search">
            </form>
            
            <div>
                
                
                
                
                
                </div>
                
            </div>

        
            <div class="wrap-btn-cetak" style="display:flex; justify-content: space-between;">
            <div class="wrap-search-2">

                <form action="cari-cetak.php" method="post">
        
                    <label for="">Filter</label>
                    <input type="text" name="cari-cetak" required>
                    <input name="btn-cetak-kelas" type="submit" style="background-color: #EAEBED ;" target="_blank" value="Cetak">
    
            
                </form>
            </div>
                    
                

            
        <a style="text-decoration: none;" href="cetak-kelas.php" target="_blank">
            <div class="btn-rekap-onClass">
                
                <img src="../../icon/pdf.png" width="40px">
                <p>Cetak Keseluruhan</p>
            </div>
        </a>
        <div>


        </div>
        </div>

    </div>

</div>



<?php
        
        include'../../koneksi.php';

        
        $data = mysqli_query($koneksi,"select t_penerimaan.idpendaftaran, t_kelas.namakelas, t_penerimaan.nama, t_penerimaan.jeniskelamin from t_kelas INNER JOIN t_penerimaan ON t_kelas.namakelas = t_penerimaan.idkelas");

        if (isset($_POST['CMBCARI'])) {
            $cari = $_POST['CMBCARI'];
            $data = mysqli_query($koneksi,"select t_penerimaan.idpendaftaran, t_kelas.namakelas, t_penerimaan.nama, t_penerimaan.jeniskelamin from t_kelas 
            INNER JOIN t_penerimaan ON t_kelas.namakelas = t_penerimaan.idkelas WHERE namakelas LIKE '%$cari%';");        }

            $cek = mysqli_num_rows($data);

            if ($cek > 0) {
                
                ?>
<table class="tbl-kelas" border="0">
    <tr>
        <b>
            <th>ID Pendaftar</th>
        </b>
        <th>Kelas</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th colspan="0">Edit</th>


    </tr>

    <?php
                while ($d = mysqli_fetch_array($data)) {
                    ?>
    <tr>
        <td><?php echo $d['idpendaftaran'];?></td>
        <td><?php echo $d['namakelas'];?></td>
        <td style="text-align: left;"><?php echo $d['nama'];?></td>
        <td><?php echo $d['jeniskelamin'];?></td>

        <td>
            <a href="admin.php?page=edit-kelas&&idpendaftaran=<?php echo $d['idpendaftaran']; ?>"><img
                    src="../../icon/info.png"
                    style="background-color: green; border-radius: 10px; display: flex; justify-content: center; padding: 5px; position: relative; left: 35px; "
                    width="32px"></a>
        </td>

    </tr>




    <?php
                    } ?>
</table>
<?php
        }else {
            echo 'Data Tidak Ada';
        }
    ?>


</div>