<?php
	include ('database.php');
	
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$email= $_POST['e-mail'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$usernameDapat = $_POST['user'];
	$passDapat = $_POST['pass'];
	$idDicari = $_POST['id_patokan'];
	
	$sql ="UPDATE guru SET nip='$nip', nama='$nama', email='$email', alamat='$alamat', ttl='$ttl', username='$usernameDapat', password='$passDapat' WHERE id=$idDicari";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>