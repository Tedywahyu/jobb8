<html>
<head>
<title>Latihan Koneksi Database Inventory Tedy</title>
</head>
<body>
<b>
<?php

	$host='localhost';
	$username='root';
	$password='';
	$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
	{ echo"Koneksi server berhasil <br><br>";}
else
	{ echo"Gagal koneksi ke server <br><br>";}

$database='dbinv_barang_tedy';
$mydb=mysql_select_db($database,$koneksi);
if($mydb)
	{ echo"Berhasil memilih database";}
else
	{ echo"Tidak dapat memilih database";}

?>
</b>
</body>
</html>