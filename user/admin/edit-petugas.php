<div class="content">
    <h3 style="font-family = Cursive; text-decoration: underline;">
        Data Petugas dan Siswa
    </h3>
    <div class="wrapper-edit">
        <div class="tiga">

            <h2 style="padding-left: 50px;">Informasi Akun/Hak Akses</h2>
            <div class="bag-info">

                <?php
    
    include'../../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"Select * from t_userlogin WHERE id='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>
                <table style="border: none;">
                    <tr>
                        <td><b>ID Petugas</b></td>
                        <td><b>: <?php echo $d['id'];?></b></td>
                    </tr>
                    <tr>
                        <td>Nama Petugas</td>
                        <td>: <?php echo $d['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>: <?php echo $d['username'];?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>: <?php echo $d['password'];?></td>
                    </tr>
                    <tr>
                        <td>Hak Akses (Sebagai)</td>
                        <td>: <?php echo $d['level'];?></td>
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
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM t_userlogin WHERE id='$id'");

        while ($d = mysqli_fetch_array($data)) {
            ?>
            <form method="post" action="../edit-petugas-aksi.php">
                <table>
                    <tr style="display: none;">
                        <td>ID Pendaftaran</td>
                        <td><input type="text" name="id" autocomplete="off" value="<?php echo $d['id']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Petugas</td>
                        <td><input type="text" name="nama" autocomplete="off" value="<?php echo $d['nama'];?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" autocomplete="off" value="<?php echo $d['username'];?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                        <input type="text" name="password" autocomplete="off" value="<?php echo $d['password'];?>">

                        </td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>
                        <select class="select-jurusan" name="level" value=" <?php echo $d['level'];?>">
                        <option disabled selected>- Pilih Hak -</option>
                    <option>siswa</option>
                    <option>admin</option>
                    <option>panitia</option>
                    
                </select>                        </td>
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