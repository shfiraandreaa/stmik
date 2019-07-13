<?
	include ('controller/database.php');
	include ('controller/viewallfakultas.php');
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="management.css">
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>nama</td>
			<td>delete</td>
		</tr>
		<?= $kontenTable ?>
	</table>
</body>
</html>