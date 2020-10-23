<?php
    $host = 'localhost';
    $user = 'root';
    $passw ='';
    $database = 'db_manager_student';
    $conn = mysqli_connect($host, $user, $passw, $database );
    if ($conn){
        mysqli_set_charset($conn, 'utf8');
    }
    else{
        echo "No hope";
    }
?>