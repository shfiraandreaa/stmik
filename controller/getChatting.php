<?php
	include('database.php');
	
	$username = $_POST['username'];

	$sqlSelect = "SELECT * FROM chatting WHERE username <> '$username'";
	
	$result = $conn->query($sqlSelect);
	
	$hasil = array();
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$data = $row['username'] . ":" . $row['message'];
				//masukan ke variabel asli
			$hasil [] = $data;
		}
	}
	
	
	if(sizeof($hasil)!=0){
		echo json_encode($hasil);
	}else{
		echo "0";
	}
	
?>