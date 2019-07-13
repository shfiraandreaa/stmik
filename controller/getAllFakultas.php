<?php
	include ("database.php");
	
	//$dapatFakultas = $_POST['fakultas'];

	$sql = "SELECT * FROM fakultas";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			echo "<option value='". $row['fakultas'] ."'>" . $row['fakultas'] . "</option>";
			
		}
		
		
		
	}else{
		echo "0";
	}
?>