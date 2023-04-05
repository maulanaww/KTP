<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
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
  $id = $_REQUEST['id'];

// update data ke database
mysqli_query($koneksi, "update datapenduduk set nik='$nik', nama='$nama', ttl='$ttl', jk='$jk', alamat='$alamat', agama='$agama', sp='$sp', kw='$kw', foto='$foto' WHERE id='$id' ");

// mengalihkan halaman kembali ke view.php
header("location:view.php");

?>