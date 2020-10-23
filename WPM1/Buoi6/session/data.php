<?php

session_start();

echo $_SESSION['phone']; 
echo $_SESSION['name']; 
echo $_SESSION['age']; 
session_destroy();
?>