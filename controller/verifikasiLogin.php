<?php
	include('database.php');
	session_start();
	
	$usernameDidapat = $_POST['username'];
	$passDidapat = $_POST['password'];
	
	$sqlSelectSiswa = "SELECT * FROM siswa WHERE username='$usernameDidapat' AND password='$passDidapat'";
	
	$sqlSelectGuru = "SELECT * FROM guru WHERE username='$usernameDidapat' AND password='$passDidapat'";
	
	$result = $conn->query($sqlSelectSiswa);
	
	if ($result->num_rows > 0) {
		
		
		
		while($row = $result->fetch_assoc()){
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['userType'] = 'siswa';
			$_SESSION['nomor_id'] = $row['id'];
			$_SESSION['nim'] = $row['nim'];
		}
	}
	
	$result = $conn->query($sqlSelectGuru);
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['userType'] = 'guru';
			$_SESSION['nomor_id'] = $row['id'];
		}
	}
	
	$conn->close();
	
	if(isset($_SESSION['username'])){
		//if($_SESSION['userType']== 'ortu'){
		//	header("Location:../ortu/home.php");
		//}else{
		header("Location:../home.php");
		//}

	}else{

		header("Location:../index.php");
	}
?>