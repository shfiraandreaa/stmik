<html>
	<head>
	<link rel="stylesheet" type="text/css" href="formulir.css">
		<title>Jurusan</title>
	</head>
	
	<body>
		<form method="post" action="controller/simpanjurusan.php">
		<div class="utama">
			<input type="hidden" name="id">
			<div class="kiri">
				<p>fakultas</p>
				<p>Jurusan</p>
			</div>
			
			<div class="kanan">
				
				<select name="fakultas" class="fk">
				<!--
						<option value="Teknik">Teknik</option>
						<option value="Bisnis">Bisnis</option>
						<option value="Sastra">Sastra</option>
						off dulu
						-->
						<?php include ("controller/getAllFakultas.php");?>
						
				</select>
					
				<input type="text" name="jurusan" />
			</div>
				<input type="submit" value="simpan">
		</div>
		</form>
	</body>
</html>