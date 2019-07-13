<?php
	include ('database.php');
	
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$email= $_POST['e-mail'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	
	$sql ="INSERT INTO guru VALUES (null,'$nip', '$nama', '$email', '$alamat', '$ttl', '$username', '$password')";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>