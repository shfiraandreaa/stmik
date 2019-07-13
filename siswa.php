<?php
	session_start();

	$jenis_formulir = $_GET['jenis_formulir'];
	
	
	
	if($jenis_formulir == 'baru'){
		include('controller/oop/siswa.php');
		$dataSiswa = new siswa;
		$usernameDapat = "";
		$passDapat = "";
		$id_patokan= "";
		$alamat = "controller/simpansiswa.php";
	}else{
		
		$id_patokan = $_SESSION['nomor_id'];
		include('controller/getsiswa.php');
		
		$usernameDapat = $_SESSION['username'];
		$passDapat = $_SESSION['password'];
		
		$alamat = "controller/updatesiswa.php";
	}
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="formulir.css">
		<title>siswa</title>
	</head>
	
	<body>
		<form method="post" action="<?=$alamat?>">
			<div class="utama">
				<input type="hidden" name="id_patokan" value="<?=$id_patokan?>" >
				<input type="hidden" id="jenis_formulir" name="jenis_formulir" value="<?=$jenis_formulir?>">
				
				<div class="kiri">
					<p>nim</p>
					<p>nama</p>
					<p>fakultas</p>
					<p>jurusan</p>
					<p>e-mail</p>
					<p>alamat</p>
					<p>ttl</p>
					<p>username</p>
					<p>password</p>
				</div>
				
				<div class="kanan">
					<input type="number" class="nim" name="nim" placeholder="nim" value="<?=$dataSiswa->nim?>">
					<input type="text" name="nama" placeholder="nama" value="<?=$dataSiswa->nama?>">
				<br>
					<select name="fakultas" class="fk">
						<option value="Teknik">Teknik</option>
						<option value="Bisnis">Bisnis</option>
						<option value="Sastra">Sastra</option>
					</select>
				<br>
					<select name="jurusan" class="jr">
						<option></option>
					</select>
					
					<input type="e-mail" name="e-mail" placeholder="e-mail" value="<?=$dataSiswa->email?>" >
					<input type="text" name="alamat" placeholder="alamat" value="<?=$dataSiswa->alamat?>">
					<input type="text" name="ttl" placeholder="ttl" value="<?=$dataSiswa->ttl?>">
					<input type="text" name="user" placeholder="username" value="<?=$usernameDapat?>">
					<input type="password" class="pass" name="pass" placeholder="password" value="<?=$passDapat?>">
					<input type="checkbox" id="check" value="show" />show
				</div>
					<input type="submit" value="simpan">
			</div>
		</form>
	</body>
</html>