<html>
<body bgcolor="#00FFFF">
<table border="l">
<tr bgcolor="#FF0000">
	<td>Kode</td>
	<td>Nama</td>
	<td>Kategori</td>
	<td>jml</td>
	<td>pokok</td>
	<td>jual</td>
	</tr>
<?php
include_once("koneksi.php");
$selectview=mysql_query("select kode, nama, kategori, jml, pokok, jual from hany order by kode,nama asc");
while($data=mysql_fetch_array($selectview))
{echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	<td>$data[4]</td>
	<td>$data[5]</td>
	</tr>";
}
?>
</table>
</body>
</html>