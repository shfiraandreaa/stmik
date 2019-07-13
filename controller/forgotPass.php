<?php
	include('database.php');
	session_start();

	$usernameSebenarnya;
	$passSebenarnya;
	$emailDidapat = $_POST['email'];
	
	$sqlSelectSiswa = "SELECT * FROM siswa WHERE email='$emailDidapat'";
	
	$sqlSelectGuru = "SELECT * FROM guru WHERE email='$emailDidapat'";
	
	$result = $conn->query($sqlSelectSiswa);
	
	if ($result->num_rows > 0) {
		
		
		
		while($row = $result->fetch_assoc()){
			$usernameSebenarnya = $row['username'];
			$passSebenarnya = $row['password'];
		}
	}
	
	$result = $conn->query($sqlSelectGuru);
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$usernameSebenarnya = $row['username'];
			$passSebenarnya = $row['password'];

		}
	}
	
	$conn->close();
	
	include ('sendingEmailRecovery.php');
	
	echo "Terkirim";
?>