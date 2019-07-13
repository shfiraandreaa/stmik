<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "latihan_sistem_stmik";
	
	// mulai koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);
	// periksa koneksi
	if ($conn->connect_error) {
		die("connection failed: " . $conn->connect_error);
	}
?>