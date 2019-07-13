<html>
	<head>
		<link rel="stylesheet" type="text/css" href="temaReg.css" />
		
		<title>Tugas</title>
	</head>
	
	<body>
		<form id="reg" method="post" action="controller/signupUser.php">

			<input type="hidden" name="id" />
				<h2>REGISTER</h2>
				<input type="text" name="user" id="user" placeholder="Username"/>
				<br><br>
				<input type="password" name="pass" id="pass" placeholder="Password" />
				<br>
				<input type="text" name="email" id="email" placeholder="Email" />
				<br><br>
				<select name="usertype" class="us">
					<option value="Guru">Guru</option>
					<option value="Siswa">Siswa</option>
				</select>
				<br><br>

				<input type="submit" value="sign-up" class="tombol">

		</form>
	</body>
</html>