<?php
	include ('database.php');
	
	$id = $_GET['id'];
	
	
	$sql ="DELETE FROM guru WHERE id = $id";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
		//header("Location:../managementguru.php");
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>