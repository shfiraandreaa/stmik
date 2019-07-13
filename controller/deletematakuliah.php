<?php
	include ('database.php');
	
	$id = $_GET['id'];
	
	$sql ="DELETE FROM mata_kuliah WHERE id=$id";
	
	if ($conn->query($sql) === TRUE){
		echo "sukses";
		// otomatis lempar ke alamat Location
		//header("Location:../managementmatakuliah.php");
	} else {
		//echo "Error:" , $sql . "<br>" . $conn->error;
		echo "gagal";
	}
	
	$conn->close();
?>