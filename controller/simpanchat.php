<?php
	include ('database.php');
	
	$username = $_POST['nickname'];
	$message = $_POST['message'];
	
	date_default_timezone_set('Asia/Jakarta');
	$tanggal_waktu = date('Y-m-d H:i:s');
	
	$sql ="INSERT INTO chatting VALUES (null,'$username', '$message', '$tanggal_waktu')";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>