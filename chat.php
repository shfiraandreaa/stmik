<?php
	$username= $_GET['username'];
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="formulir.css">
		<title>chat</title>
	</head>
	
	<body>
	<form method="get" action="siswa.php">
			<div class="utama">
				<div class="kiri">
					<p>nickname</p>
					<p>message</p>
				</div>
				
				<div class="kanan">
					<input readonly type="text" id="nickname" name="nickname" placeholder="nickname" value="<?= $username ?>">
					<textarea id="conversation" name="conversation"></textarea>
					<input type="text" id="message" name="message" placeholder="message">
					<input type="button" id="send" value="send">
					</div>
			</div>
		</form>
	</body>
</html>