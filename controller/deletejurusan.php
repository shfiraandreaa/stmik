<?php
	include ('database.php');
	
	$id = $_GET['id'];
	
	$sql ="DELETE FROM jurusan WHERE id=$id";
	
	if ($conn->query($sql) === TRUE){
		echo "sukses";
		//header("Location:../managementjurusan.php");
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>