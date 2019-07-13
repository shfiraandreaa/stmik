<?php
	include ('database.php');
	
	$id = $_GET['id'];

	
	$sql ="DELETE FROM nilai WHERE id=$id";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
		//header("Location:../managementnilai.php");
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>