<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "SI_mart";
	
	$kon = mysqli_connect($host, $user, $pass);
	if (!$kon)
		 die("Gagal Koneksi...");
	
	$hasil = mysqli_select_db($kon, $dbName);
	if (!$hasil){
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
		 die("Gagal Buat Database");
	else
		$hasil = mysqli_select_db($kon, $dbName);
		if (!$hasil) die ("Gagal Konek Database");
	 }
	 
	 $sqlTabelbarang = "create table if not exists barang (
						kode_brg int auto_increment not null primary key,
						nama_brg varchar(10) not null,
						jenis_brg varchar(10) not null ,
						harga int(6) not null, 
						KEY (nama_brg) )";
	
	mysqli_query ($kon, $sqlTabelbarang) or die("Gagal Buat Tabel barang ");

	$sqlTabelpermintaan_barang = "create table if not exists permintaan_barang (
						kode_per_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						id_bag_pemasaran int (4)  not null ,
						id_bag_gudang int (4) not null ,
						qty int (4) not null ,
						tgl_per_brg varchar (10) not null,
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabelpermintaan_barang) or die("Gagal Buat Tabel permintaan_barang ");

	$sqlTabeldetail_jual_barang = "create table if not exists detail_jual_barang (
						kode_jual_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						qty int (3)  not null ,
						id_bag_pemasaran int (4) not null ,
						id_bag_keuangan int (4) not null ,
						tgl_jual varchar (10) not null,
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabeldetail_jual_barang) or die("Gagal Buat Tabel detail_jual_barang ");

	$sqlTabeldetail_barang = "create table if not exists detail_barang (
						kode_det_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						stok_brg int (3)  not null ,
						id_bag_gudang int (4) not null ,
						tgl_det_brg varchar (10) not null,
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabeldetail_barang) or die("Gagal Buat Tabel detail_barang ");


?>





