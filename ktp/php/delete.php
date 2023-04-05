<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi,"delete from datapenduduk where id='$id'");

header("location:view.php");
?>