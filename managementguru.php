<?php
	include ('controller/database.php');
	include ('controller/viewallguru.php');
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="management.css">
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>nip</td>
			<td>nama</td>
			<td>email</td>
			<td>alamat</td>
			<td>ttl</td>
			<td>delete</td>
		</tr>
		<?= $kontenTable ?>
	</table>
</body>
</html>