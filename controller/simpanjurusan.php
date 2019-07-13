<?php
	include ('database.php');
	
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	
	$sql ="INSERT INTO fakultas_jurusan VALUES (null, '$fakultas', '$jurusan')";
	
	if ($conn->query($sql) === TRUE){
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>