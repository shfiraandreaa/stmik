<?php
	include ('database.php');
	
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$email = $_POST['e-mail'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];
	$ttl= $_POST['ttl'];
	
	$sql ="INSERT INTO siswa VALUES (null,'$nim', '$nama', '$jurusan', '$email', '$alamat', '$ttl', '$username' , '$password')";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>