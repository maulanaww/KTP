<!doctype html>
<html lang="en">
  <head>
    <style>
      body{
        background-image: url(../img/bg1.jpg);
        background-size: cover;
        background-attachment: fixed;
      }
      .warna{
        background-color: rgb(179, 245, 247);
        border-radius: 20px;
      }
      .tulis{
        color: aliceblue;
      }
    </style>
    <title>Input Data KTP</title>
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
    <br>
    <br>
    <br>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from datapenduduk where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <center>
    <table border=0 cellspacing=0 class="warna" cellpadding="20">
      <tr>
        <td>
          <form align="left" action="../php/actione.php" method="post" enctype="multipart/form-data">
            <table border=0 cellpadding="5">
                <tr>
                    <th colspan="2"><center><h4> Edit Your Data </h4></center></th>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">NIK</label></div></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <div class="mb-3"><input name="nik" type="text" pattern="[0-9]{16}" maxlength="16" class="form-control" required value="<?php echo $d['nik']; ?>"></div>
                    </td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Nama</label></div></td>
                    <td><div class="mb-3"><input name="nama" type="text" class="form-control" required value="<?php echo $d['nama']; ?>"></div></td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Tanggal Lahir</label></div></td>
                    <td><div class="mb-3"><input name="ttl" type="date" class="form-control" required value="<?php echo $d['ttl']; ?>"></div></td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Jenis Kelamin</label></td>
                    <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-Laki" checked
                            <?php
                                if($d['jk'] == 'Laki-Laki'){
                                    echo "checked";
                                }
                            ?>
                        >
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan"
                            <?php
                                if($d['jk'] == 'Perempuan'){
                                    echo "checked";
                                }
                            ?>
                        >
                        <label class="form-check-label">Perempuan</label>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Alamat</label></div></td>
                    <td><div class="mb-3"><textarea name="alamat" class="form-control" rows="3" required><?php echo $d['alamat']; ?></textarea></div></td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Agama</label></div></td>
                    <td>
                        <select class="form-select" name="agama">
                            <option value="Islam" selected
                            <?php
                                if($d['agama'] == 'Islam'){
                                    echo "selected";
                                }
                            ?>
                            >Islam</option>
                            <option value="Protestan"
                            <?php
                                if($d['agama'] == 'Protestan'){
                                    echo "selected";
                                }
                            ?>
                            >Protestan</option>
                            <option value="Katholik"
                            <?php
                                if($d['agama'] == 'Katholik'){
                                    echo "selected";
                                }
                            ?>
                            >Katholik</option>
                            <option value="Hindu"
                            <?php
                                if($d['agama'] == 'Hindu'){
                                    echo "selected";
                                }
                            ?>
                            >Hindu</option>
                            <option value="Budha"
                            <?php
                                if($d['agama'] == 'Budha'){
                                    echo "selected";
                                }
                            ?>
                            >Budha</option>
                            <option value="Khonghucu"
                            <?php
                                if($d['agama'] == 'Khonghucu'){
                                    echo "selected";
                                }
                            ?>
                            >Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Status Perkawinan</label></div></td>
                    <td>
                        <select class="form-select" name="sp">
                            <option value="Belum Kawin" selected
                            <?php
                                if($d['sp'] == 'Belum Kawin'){
                                    echo "selected";
                                }
                            ?>
                            >Belum Kawin</option>
                            <option value="Kawin"
                            <?php
                                if($d['sp'] == 'Kawin'){
                                    echo "selected";
                                }
                            ?>
                            >Kawin</option>
                            <option value="Cerai Hidup"
                            <?php
                                if($d['sp'] == 'Cerai Hidup'){
                                    echo "selected";
                                }
                            ?>
                            >Cerai Hidup</option>
                            <option value="Cerai Mati"
                            <?php
                                if($d['sp'] == 'Cerai Mati'){
                                    echo "selected";
                                }
                            ?>
                            >Cerai Mati</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Kewarganegaraan</label></div></td>
                    <td>
                        <select class="form-select" name="kw">
                            <option value="WNI" selected
                            <?php
                                if($d['kw'] == 'WNI'){
                                    echo "selected";
                                }
                            ?>
                            >WNI</option>
                            <option value="WNA"
                            <?php
                                if($d['kw'] == 'WNA'){
                                    echo "selected";
                                }
                            ?>
                            >WNA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><div class="mb-3"><label class="form-label">Masukkan Foto</label></div></td>
                    <td>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="foto" required value="<?php echo $d['foto']; ?>">
                          </div>
                    </td>
                </tr>
                <tr>
                    <td height="40"><button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
                    <td height="40"><a class="btn btn-primary" role="button" href="view.php">Cancel</a></button></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
          </form>
          <?php
    }
    ?>
        </td>
      </tr>
    </table>
    </center>
    <br>
    <script src="../resources/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>