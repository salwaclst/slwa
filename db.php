<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db_galeryfto';
	
	$db= mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
?>