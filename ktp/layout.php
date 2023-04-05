<?php
session_start();
include "../ktp/php/koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <style>
      body{
        background-image: url(../ktp/img/bg.png);
        background-size: cover;
        background-attachment: fixed;
      }
      .warna{
        background-color: ivory;
        border-radius: 20px;
      }
      .tulis{
        color: aliceblue;
      }
    </style>
    <title>Rekap Data KTP</title>
    <link href="../ktp/resources/bootstrap-5.2.1-dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
    $proses=mysqli_real_escape_string($koneksi, @$_GET['proses']);
    if($proses=="login"){
        $email=mysqli_real_escape_string($koneksi, @$_POST['email']);
        $pass=mysqli_real_escape_string($koneksi, @$_POST['pass']);
        $cekakun=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND pass='$pass'"));
        if($cekakun!=0){
            $_SESSION['email']=$email;
            $_SESSION['pass']=$pass;
            header("Location: ../ktp/layout.html");
            echo '<script>alert"Sukses!! Login Berhasil"</script>';
        }else{
            echo '<script>alert"Maaf!! Username atau password yang anda masukkan salah, silahkan coba kembali"</script>';
        }
        
    }
    ?>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../ktp/img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
          DataKu
        </a>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="card text-bg-info mb-3" style="max-width: 18rem;">
            <div class="card-body warna">
              <form align="left" method="post" action="?proses=login">
                <center><h4>Login User</h4></center>
                <br>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input name="pass" type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                <a class="btn btn-primary" href="../ktp/html/register.html" role="button">Register</a>
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <figure class="text-end">
            <blockquote class="blockquote fs-1 fw-bold tulis">
              <p>Login To</p><p>Secure Some Of</p><p>Your Personal Data</p>
            </blockquote>
            <br>
            <br>
            <cite class="tulis" title="Source Title" >DataKu is an Indonesian population data collection system. Don't worry we will leak your data. Login if you already have an account and register if you don't have an account.</cite>
          </figure>
        </div>
      </div>
    </div>
    <br>
    <script src="../ktp/resources/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>