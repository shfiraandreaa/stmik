<?php
	include ('database.php');
	
	$nama_mata_kuliah = $_POST['nama_mata_kuliah'];
	$nimDidapat = $_POST['nim'];
	$nilai = $_POST['nilai'];
	
	$sql ="INSERT INTO nilai VALUES (null, '$nama_mata_kuliah', '$nimDidapat', '$nilai')";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
	} else {
		echo "gagal"; 
	}
	
	$conn->close();
?>