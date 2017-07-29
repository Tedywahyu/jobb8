<html>
<head>
<title>Latihan Membuat Tabel Barang tedy</title>
</head>
<body>
<?php
include_once("dbinv_connect_tedy.php");
$update=mysql_query("update barang set kategori = 'Handphone' where kode =0001");

if($update)
	{echo "Berhasil mengupdate data pada tabel barang";}
else
	{echo "Gagal mengupdate data";}
?>
</body>
</html>