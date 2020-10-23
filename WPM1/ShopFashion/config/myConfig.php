<?php
    $host = 'localhost';
    $user = 'root';
    $passw ='';
    $database = 'shopfashion';
    $conn = mysqli_connect($host, $user, $passw, $database);
    if ($conn){
        mysqli_set_charset($conn, 'utf8');
    }
    else{
        echo "No hope";
    }
?>