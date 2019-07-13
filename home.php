<?php
	session_start();

	if(isset($_SESSION['username'])){
		$usernameDidapat = $_SESSION['username'];
		$passDidapat = $_SESSION['password'];
		$userTypeDidapat = $_SESSION['userType'];
	}else{
		header("Location:../index.php?status=failed");
	}
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="tema.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/navigation.js"></script>
		<title>Log In</title>
	</head>
	
	<body>
	<input id="username" type="hidden" value="<?= $usernameDidapat ?>"/>
	<div class="utama">
		<?php
			if(isset($userTypeDidapat)){
				if($userTypeDidapat == 'guru'){
					include('menuGuru.html');
				}else{
					include('menuSiswa.html');
				}
			}
		?>
		
		<div class="atas">
			<img id="chat" src="images/chat.png"/>
			<img src="images/fly.png"/>
			<img id="setting" src="images/atom.png"/>
			<div class="isi">
				<a class="profil" no-id="<?=$_SESSION['nomor_id']?>" href="<?=$_SESSION['userType']?>.php"><img src="images/user.png"/></a>
				<span> <?php echo "$usernameDidapat";?></span>
			</div>
			<div class="logout">
				<a href="controller/logout.php"><img src="images/logout.png" /></a>
			</div>
		
			<div class="konten"></div>
		</div>
	</div>
	</body>
</html>