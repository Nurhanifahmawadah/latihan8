<html>
<body bgcolor="#00FFFF">
<?php
include_once("koneksi.php");
$tabel=mysql_query("CREATE TABLE hany (
kode VARCHAR NOT NULL,
nama VARCHAR (30) NOT NULL,
kategori VARCHAR (30) NOT NULL,
jml DOUBLE NOT NULL,
pokok DOUBLE NOT NULL,
jual DOUBLE NOT NULL,
PRIMARY KEY(kode))");
if($tabel)
{echo"berhasil membuat tabel hany melalui script php";}
else
{echo"gagal membuat tabel";}
?>
</body>
</html>