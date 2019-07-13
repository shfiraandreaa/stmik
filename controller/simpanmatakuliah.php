<?php
	include ('database.php');
	
	$nama = $_POST['nama'];
	$jumlah_sks = $_POST['jumlah_sks'];
	$fakultas = $_POST['fakultas'];
	
	$sql ="INSERT INTO mata_kuliah VALUES (null, '$nama', '$jumlah_sks', '$fakultas')";
	
	if ($conn->query($sql) === TRUE){
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>