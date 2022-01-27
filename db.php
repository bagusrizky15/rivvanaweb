<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname   = 'rivvanadb';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>