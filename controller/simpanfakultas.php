<?php
	include ('database.php');
	
	$fakultas = $_POST['fakultas'];
	
	$sql ="INSERT INTO fakultas VALUES (null, '$fakultas')";
	
	if ($conn->query($sql) === TRUE){
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>