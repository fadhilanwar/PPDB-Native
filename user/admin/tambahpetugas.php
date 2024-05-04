
<style>

.satu{
    /* background-color: red; */
    
}

</style>

<div class="contenti">
    <h2>
        Tambah User
    </h2>
    <form method="post" action="../tambah-aksi.php">

        <div class="main-contenti">

            <div class="satu">
                <b>ID</b>
                <br>
                <input type="text" name="id">
                <br>

                <!-- NIS
                <br>
                <input type="text" name="nis">
                <br>

                NIK
                <br>
                <input type="text" name="nik">
                <br> -->

                Nama
                <br>
                <input type="text" name="nama">
                <br>

                Username
                <br>
                <input type="text" name="asalsekolah">
                <br>


                Password
                <br>
                <input type="text" name="jeniskelamin">
                <br>

                Level
                <br>
                <select class="select-jurusan" name="jurusan">
                <option disabled selected>- Pilih Hak Akses -</option>
                    <option>siswa</option>
                    <option>admin</option>
                    <option>panitia</option>
                    
                </select>
                <br>

                 


            </div>

            
        
        <?php
    
    include'../../koneksi.php';
    $data = mysqli_query($koneksi,"Select * from t_userlogin");

    while ($d = mysqli_fetch_array($data)) {
        ?>
        
        <tr>
            
            <td><?php echo $d['id'];?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['username'];?></td>
            <td><?php echo $d['password'];?></td>
            <td><?php echo $d['level'];?></td>

        </tr>
    </table>
    <?php
    }
    ?>

        </div>
           

        </div>





</div>