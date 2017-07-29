<html>
<head>
<title>Latihan Membuat Tabel Barang tedy</title>
</head>
<body>
<?php
include_once("dbinv_connect_tedy.php");
		$insert=mysql_query("INSERT INTO barang  (kode,nama_barang,kategori,jumlah,pokok_jual)
							VALUES ('1','kertas','Peralatan','5','2500')");
if($insert)
	{ echo"Berhasil menyisipkan data pada tabel barang";}
else
	{ echo"Gagal menyisipkan data";}
?>
</body>
</html>