<?php
	
	include ('oop/surel.php');
	
	$email = new surel;
	
	//$email->kepada="firaandreaa@yahoo.com";
	$email->kepada=$dapatEmail;
	$email->judulEmail="account anda sudah teregister (STMIK.CO.ID)";
	$email->header="";
	$email->pesan="Username anda adalah ".$dapatUser."\r\npassword anda".$dapatPass;
	
	$email->kirim();
	
?>