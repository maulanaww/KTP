<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ktp";
$koneksi = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

  $nama = $_REQUEST['nama'];
  $jk = $_REQUEST['jk'];
  $ttl = $_REQUEST['ttl'];
  $alamat = $_REQUEST['alamat'];
  $email = $_REQUEST['email'];
  $pass = $_REQUEST['pass'];
  
  $sql = "INSERT INTO user (nama, jk, ttl, alamat, email, pass) VALUES ('$nama', '$jk', '$ttl', '$alamat', '$email', '$pass')";
  
  $result = mysqli_query($koneksi, $sql);
  if ($result) {
          header("Location: ../layout.php");
          echo '<script>alert"Sukses!! Registrasi Berhasil"</script>';
      }else{
          echo '<script>alert"Sorry!!"</script>';
      }
      mysqli_close($koneksi);
?>