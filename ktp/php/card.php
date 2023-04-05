<!doctype html>
<html lang="en">
<head>
    <style>
    body{
        background-image: url(../img/bg1.jpg);
        background-size: cover;
        background-attachment: fixed;
    }
    .card-container{
        width: 70vh;
        height: 70vh;
        display: vlex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-evenly;
    }
    .card{
        display: grid;
        grid-template-columns: 300px;
        grid-template-rows: 200px 200px 70px;
        grid-template-areas: "image" "text";
        margin: 20px;
        font-family: verdana;
        background: rgba;
        border-radius: 20px;
        box-shadow: 5px 5px 15px rgba;
        text-align: center;
        cursor: pointer;
    }
    .card-image{
        grid-area: image;
        margin-top: 20px;
    }
    .card-text{
        grid-area: text;
        margin: 20px;
        font-size: 13px;
        text-align: left;
    }
    .card .one{
        background-size: contain;
        background-position: center;
    }
    img{
        border-radius: 50px;
    }
    </style>
    <title>Card</title>
    <link href="../resources/bootstrap-5.2.1-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            DataKu
        </a>
    </div>
    </nav>
    <div class="d-grid gap-2">
        <a class="btn btn-primary" role="button" href="view.php">Back</a>
    </div>
    <br>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from datapenduduk where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <center>
    <div class="card-container">
        <div class="card">
            <div class="card-image one"><img height="100" src="../img/user/<?php echo $d['foto']; ?>"></div>
            <br>
            <div class="card-text">
                <table border=0  cellpadding="7">
                    <tr>
                        <td>NIK</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <?php echo $d['nik']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo $d['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo $d['ttl']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $d['jk']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $d['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td><?php echo $d['agama']; ?></td>
                    </tr>
                    <tr>
                        <td>Status Pernikahan</td>
                        <td><?php echo $d['sp']; ?></td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td><?php echo $d['kw']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <br>
            </div>
        </div>
    </div>
    </center>
    <br>
    <script src="../resources/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>