<?php
	include ('database.php');
	
	$id = $_GET['id'];

	
	$sql ="DELETE FROM siswa WHERE id=$id";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
		//header("Location:../managementsiswa.php");
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>