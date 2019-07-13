<?php
	session_start();
	
	$jenis_formulir = $_GET['jenis_formulir'];
	if($jenis_formulir == 'baru'){
		include ('controller/oop/guru.php');
		$dataGuru = new guru;
		$usernameDapat = "";
		$passDapat = "";
		$id_patokan = "";
		$alamat = "controller/simpanguru.php";
	}else{
		$id_patokan =$_SESSION['nomor_id'];
		include ('controller/getguru.php');
		
		$usernameDapat = $_SESSION['username'];
		$passDapat = $_SESSION['password'];
		$id_patokan = $_SESSION['nomor_id'];
		$alamat = "controller/updateguru.php";
	}
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="formulir.css">
		<title>guru</title>
	</head>
	
	<body>
		<form method="post" action="<?=$alamat?>">
			<div class="utama">
				<input type="hidden" name="id_patokan" value="<?=$id_patokan?>">
				<input type="hidden" id="jenis_formulir" name="jenis_formulir" value="<?=$jenis_formulir?>">
				
				<div class="kiri">
					<p>nip</p>
					<p>nama</p>
					<p>e-mail</p>
					<p>alamat</p>
					<p>ttl</p>
					<p>username</p>
					<p>password</p>
				</div>
				
				<div class="kanan">
					<input type="number" name="nip" placeholder="nip" value="<?=$dataGuru->nip?>">
					<input type="text" name="nama" placeholder="nama" value="<?=$dataGuru->nama?>">
					<input type="e-mail" name="e-mail" placeholder="e-mail" value="<?=$dataGuru->email?>">
					<input type="text" name="alamat" placeholder="alamat" value="<?=$dataGuru->alamat?>">
					<input type="text" name="ttl" placeholder="ttl" value="<?=$dataGuru->ttl?>">
					<input type="text" name="user" placeholder="username"  value="<?=$usernameDapat?>">
					<input type="password" class="pass" name="pass" placeholder="password" value="<?=$passDapat?>">
					<input type="checkbox" id="check" value="show" />show
				</div>
					<input type="submit" value="simpan">
			</div>
		</form>
	</body>
</html>