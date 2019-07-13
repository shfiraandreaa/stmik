<?php
	include ("database.php");
	
	$dapatUser = $_POST['user'];
	$dapatPass = $_POST['pass'];
	$dapatEmail = $_POST['email'];
	$dapatUserType = $_POST['usertype'];
	
	if($dapatUserType == "Guru"){
		//'dikosong' maksudnya databasenya itu isinya dikosongin soalnya ga ada di formulir signupnya
		$sql ="INSERT INTO guru VALUES(null, '', '', '$dapatEmail', '', '', '$dapatUser' , '$dapatPass')";
	}else{
		$sql ="INSERT INTO siswa VALUES(null, 
		'', '', '', 
		'$dapatEmail', '', '',
		'$dapatUser','$dapatPass')";
	}
	
	
	
	if ($conn->query($sql) === TRUE) {
		include ('sendingEmail.php');
		echo "Tersimpan";
	} else {
		echo "Gagal Tersimpan";
	}
	
	$conn->close();
?>