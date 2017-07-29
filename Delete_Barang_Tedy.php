<html>
<head>
<title>Koneksi Databasse Tedy</title>
</head>
<body>
<?php
include_once("dbinv_connect_tedy.php");
$kode=6;
$delete=mysql_query("delete from barang where kode='$kode'");
if($delete)
{echo"berhasil menghapus data barang dengan kode $kode";}
else
{echo"gagal menghapus data";}
?>
</body>
</html>