<?php
	include ('database.php');
	
	$id = $_GET['id'];
	
	$sql ="DELETE FROM fakultas WHERE $id";
	
	if ($conn->query($sql) === TRUE){
		echo "sukses";
		//header("Location:../managementfakultas.php");
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>