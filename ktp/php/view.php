<!doctype html>
<html lang="en">
<head>
    <style>
    body{
        background-image: url(../img/bg1.jpg);
        background-size: cover;
        background-attachment: fixed;
    }
    </style>
    <title>DataKu</title>
    <link href="../resources/bootstrap-5.2.1-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                DataKu
            </a>
            <form class="d-flex" action="" method="post">
                <input class="form-control me-2" name="cari" type="text" placeholder="Search" autocomplete="off">
                <button class="btn btn-outline-success" name="search" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <br>
    <div class="d-grid gap-2">
        <a class="btn btn-primary" role="button" href="../layout.html">Back</a>
    </div>
    <br>
    <br>
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Kewarganegaraan</th>
                <th>Foto</th>
                <th>Opsi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $hitung = mysqli_query($koneksi, "SELECT * FROM datapenduduk");
            $total = mysqli_num_rows($hitung);
            if (isset($_POST["search"])) {
                $cari = $_POST['cari'];
                $data = mysqli_query($koneksi, "select * from datapenduduk where nik like '%$cari%' or nama like '%$cari%' or ttl like '%$cari%' or jk like '%$cari%' or alamat like '%$cari%' or agama like '%$cari%' or sp like '%$cari%' or kw like '%$cari%'");
            }else{
                $data = mysqli_query($koneksi, "select * from datapenduduk"); 
            }
            $no = 1;
            while($d = mysqli_fetch_array($data)) {
            ?>
            <h5>Total data</h5>
            <p><?php echo $total;
             ?></p>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['ttl']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['sp']; ?></td>
                <td><?php echo $d['kw']; ?></td>
                <td><img height="80" src="../img/user/<?php echo $d['foto']; ?>"></td>
                <td>
                    <a class="btn btn-primary btn-sm" role="button" href="card.php?id=<?php echo $d['id']; ?>">View</a>
                    <a class="btn btn-primary btn-sm" role="button" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a class="btn btn-primary btn-sm" role="button" href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    <script src="../resources/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>