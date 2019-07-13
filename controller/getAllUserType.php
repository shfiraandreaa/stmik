<?
	include("database.php");

	$sql = "SELECT * FROM data_usertype ";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			echo "<option value='". $row['id'] ."'>" . $row['nama'] . "</option>";
			
		}
		
		
		
	}else{
		echo "0";
	}
	
	$conn->close();
?>