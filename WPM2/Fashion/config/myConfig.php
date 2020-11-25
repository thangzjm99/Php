<?php  
	$host    = 'localhost'; // 127.0.0.1
	$user    = 'root';
	$passw   = '';
	$databse = 'shopfashion';

	$conn = mysqli_connect($host, $user, $passw, $databse) or die("Can't connect database!");

	if ($conn) {
		mysqli_set_charset($conn, 'utf8');
	}else{
		echo "Can't connect database!";
	}
?>