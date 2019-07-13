<?php
	session_start();

	include ('controller/database.php');
	
	if(isset($_SESSION['nim'])){
		include('controller/viewAllNilaiSiswa.php');
	}else{
		include('controller/viewallnilai.php');
	}
	
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="management.css">
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>nama mata kuliah</td>
			<td>nim</td>
			<td>nilai</td>
			<td>delete</td>
		</tr>
		<?= $kontenTable ?>
	</table>
</body>
</html>