<html>
<body bgcolor="lightgreen" background="../pict/3.jpg" >
<h2 align="center">.:: Input Penjualan Barang ::.</h2>
<form action="jual_simpan.php" method="post" >
	<table border="1" align="center">
		<tr>
			<td>Kode Barang</td>
			<td><input text="text" name="kode_brg"  /></td>
		</tr>
		<tr>
			<td>Quantity</td> 
			<td><input text="text" name="qty" /></td>
		</tr>
		<tr>
			<td>ID Pemasaran</td> 
			<td><input text="text" name="id_bag_pemasaran" />
			</td>
		</tr>
		<tr>
			<td>ID Keuangan</td> 
			<td><input text="text" name="id_bag_keuangan" /></td>
		</tr>
		<tr>
			<td>Tgl Penjualan barang</td> 
			<td><input text="text" name="tgl_jual" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			 <input type="submit" value="Simpan" name="proses" />
			 <input type="reset" value="Reset" name="reset" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>
