<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PPDB SMK Ti Pembangunan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../model/model-login.css">
</head>
<body>
    <form method="post" action="aksi-login.php">
      <div class="wrapper-login">

      

        <div id="login-form-wrap">

          <div class="logo-home">
            <img src="../icon/SmktipHQ.png" width="120px">
          </div>
            
          <h2>Login PPDB SMKTIP</h2>
          
            <p>
              <label style="font-size: 16px;">Username</label>
            <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
            <label style="font-size: 16px;">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
            <input type="submit" id="login" value="Login">
            </p>
         
          <div id="create-account-wrap">
            <p style="color: black;">Belum Memiliki Akun ? <a href=register/register-siswa.php?page=dash>Daftar disini</a><p>
          </div>
        </div>
        
      </div>
    </form>
</body>
</html>