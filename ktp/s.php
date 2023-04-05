<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ktp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error)	{
	die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE dataPenduduk	(
	id INT(20) PRIMARY KEY,
	nik VARCHAR(16),
	nama VARCHAR(50),
	ttl DATE,
	jk ENUM('Laki-Laki', 'Perempuan'),
	alamat VARCHAR(100),
	agama ENUM('Islam', 'Protestan', 'Katholik', 'Hindu', 'Budha', 'Khonghucu'),
	sp ENUM('Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'),
	kw ENUM('WNI', 'WNA'),
	foto TEXT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql))	{
	echo "Table buku berhasil dibuat";
}	else	{
	echo "Gagal membuat tabel buku, semangat ya bro :)" . mysqli_error($conn);
}

mysqli_close($conn);
?>