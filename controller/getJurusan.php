<?php
	include ("database.php");
	
	$dapatFakultas = $_POST['fakultas'];

	$sql = "SELECT * FROM fakultas_jurusan WHERE fakultas = '$dapatFakultas'";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			$dataDitemukan[] = $row['jurusan'];
		}
		
		echo json_encode($dataDitemukan);
		
	}else{
		echo "0";
	}
?>