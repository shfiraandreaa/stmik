<?php
	include ("database.php");
	include('oop/siswa.php');
	
	$dataSiswa = new siswa; 

	$sql = "SELECT * FROM siswa WHERE id = $id_patokan";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			$dataSiswa->id = $row['id'];
			$dataSiswa->nama = $row['nama'];
			$dataSiswa->nim = $row['nim'];
			$dataSiswa->jurusan = $row['jurusan'];
			$dataSiswa->email = $row['email'];
			$dataSiswa->alamat = $row['alamat'];
			$dataSiswa->ttl = $row['ttl'];
		}
		
		
		
	}else{
		//$dataSiswa = null;
	}
?>