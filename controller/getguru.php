<?php
	include ("database.php");
	include('oop/guru.php');
	
	$dataGuru = new guru; 

	$sql = "SELECT * FROM guru WHERE id = $id_patokan";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			$dataGuru->id = $row['id'];
			$dataGuru->nip = $row['nip'];
			$dataGuru->nama = $row['nama'];
			$dataGuru->email = $row['email'];
			$dataGuru->alamat = $row['alamat'];
			$dataGuru->ttl = $row['ttl'];
		}
		
		
		
	}else{
		//$dataSiswa = null;
	}
?>