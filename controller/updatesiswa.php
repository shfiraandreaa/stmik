<?php
	include ('database.php');
	
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$email = $_POST['e-mail'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];
	$ttl= $_POST['ttl'];
	$usernameDapat = $_POST['user'];
	$passDapat = $_POST['pass'];
	$idDicari = $_POST['id_patokan'];
	
	$sql ="UPDATE siswa SET nim='$nim' , nama='$nama' , jurusan='$jurusan' ,
	email='$email' , alamat='$alamat' , ttl='$ttl' ,
	username='$usernameDapat' , password='$passDapat' WHERE id=$idDicari";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>