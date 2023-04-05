<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ktp";
$koneksi = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
if (isset($_POST['submit'])) {
    $foto = $_FILES['foto']['name'];
    $path = $_FILES['foto']['tmp_name'];
    move_uploaded_file($path, '../img/user/'.$foto);
}
  $nik = $_REQUEST['nik'];
  $nama = $_REQUEST['nama'];
  $ttl = $_REQUEST['ttl'];
  $jk = $_REQUEST['jk'];
  $alamat = $_REQUEST['alamat'];
  $agama = $_REQUEST['agama'];
  $sp = $_REQUEST['sp'];
  $kw = $_REQUEST['kw'];

  $sql = "INSERT INTO datapenduduk (nik, nama, ttl, jk, alamat, agama, sp, kw, foto) VALUES ('$nik', '$nama', '$ttl', '$jk', '$alamat', '$agama', '$sp', '$kw', '$foto')";
  
  $result = mysqli_query($koneksi, $sql);
  if ($result) {
          header("Location: ../layout.html");
          echo '<script>alert"Sukses!! Registrasi Berhasil"</script>';
      }else{
          echo '<script>alert"Sorry!!"</script>';
      }
      mysqli_close($koneksi);
?>