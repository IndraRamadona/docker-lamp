<html>
<body bgcolor="lightgreen" background="../pict/3.png" >
<?php
$cari="";
if(isset($_POST["cari"]))
$cari = $_POST["cari"];
include "../koneksi.php";
$sql = "select * from detail_jual_barang where kode_brg LIKE '%".$cari."%'order by kode_jual_brg desc";
$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="jual_isi.php">INPUT DATA</a>
&nbsp; &nbsp; &nbsp;
<a href="jual_cari.php">CARI DATA</a> 
<table border="1">
<tr bgcolor="gold">
<th>Kode Jual Barang</th>	
<th>Kode Barang</th>
<th>Qty</th>
<th>ID Pemasaran</th>
<th>ID Keuangan</th>
<th>Tgl_jual</th>
<th>Operasi</th>

</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_array($hasil)){
echo " <tr> ";
echo " <td> ".$row['kode_jual_brg']."</td>";
echo " <td> ".$row['kode_brg']."</td>";
echo " <td> ".$row['qty']."</td>";
echo " <td> ".$row['id_bag_pemasaran']."</td>";
echo " <td> ".$row['id_bag_keuangan']."</td>";
echo " <td> ".$row['tgl_jual']."</td>";
echo " <td> ";
echo " <a href='jual_edit.php?kode_jual_brg=" . $row['kode_jual_brg'] . " '>
		EDIT</a>";
echo " &nbsp;&nbsp;";
echo" <a href='jual_hapus.php?kode_jual_brg=" . $row['kode_jual_brg']. " '>
HAPUS</a>";
echo " </td>";		
echo " </tr> ";
}
?>
</table>
<body>
</html>


