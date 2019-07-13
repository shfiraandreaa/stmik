<?php
	
	include ('oop/surel.php');
	
	$email = new surel;
	
	//$email->kepada="firaandreaa@yahoo.com";
	$email->kepada=$emailDidapat;
	$email->judulEmail="Data Login Anda";
	$email->header="";
	$email->pesan="Username anda adalah ".$usernameSebenarnya."\r\npassword anda".$passSebenarnya;
	
	$email->kirim();
	
?>