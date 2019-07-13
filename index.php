<?php
	$status="";
	
	if(isset($_GET['status'])){
		$status = "Anda Belum Login";
	}

?>


<html>
	<head>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/Signup.js"></script>
	<script src="js/ForgotPass.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
		<title>Log In</title>
	</head>
	
	<body>
		<div class="utama">
			<div class="kiri">
				<div class="wadah-image">
					<img src="images/fb.png"/>
					<img src="images/twitter.png"/>
					<img src="images/google.png"/>
				<br>
					<span>Don't have an account?</span>
				<br>
					<a class="register" href="">SignUp</a>
				</div>
			</div>
			
			<div class="kanan">
				<img src="images/stmik.jpg"/>
				<h4 class="warning"><?=$status?></h4>
					<form method="post" action="controller/verifikasiLogin.php">
						<input name="username" type="text" placeholder="Username"><br>
						<input name="password" type="password" placeholder="Password"><br>
						<div><input type="checkbox" ><span>Remember Me</span></div><br>
						<input type="submit" value="LOGIN"><br>
						<a class="fgtPass" href="forgotPass.html">Forgot Password</a>
					</form>
			</div>
		</div>
	</body>
</html>