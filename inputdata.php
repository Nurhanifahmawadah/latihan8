<html>
<body>
<?php
include_once("koneksi.php");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('1','Buku Tulis','ATK','100','10000','12000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('2','kipas','elektronik','100','400000','450000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('3','HP Samsung','elektronik','1','2500000','3000000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('4','Kalkulator','elektronik','10','40000','45000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('5','Blender','elektronik','8','255000','300000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('6','Lampu LED','elektronik','10','100000','150000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('7','AC','elektronik','2','2100000','450000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('8','Leptop','elektronik','5','4000000','4500000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('9','Camera','elektronik','7','10000000','10100000')");
$insert=mysql_query("INSERT INTO hany(kode,nama,kategori,jml,pokok,jual)
VALUES('10','Mouse','elektronik','2','40000','45000')");
if($insert)
{echo"berhasil menyisipkan data pada tabel hany";}
else
{echo"gagal penyisipan data";}
?>
</body>
</html>