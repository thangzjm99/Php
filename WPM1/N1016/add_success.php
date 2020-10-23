<?php 	
    
	if(isset($_GET['add_member']))
	{
    global $conn;
    $name = $_GET['name'];
	$id_faculty = $_GET['faculty'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
    $address = $_GET['address'];
    print_r($_GET);
	$add_sql="INSERT INTO tbl_student (id_student,id_faculty, name, email, phone,address,status,time_create) VALUES ('','$id_faculty','$name','$email','$phone','$address','1','')";
    mysqli_query($conn, $add_sql) or die ("query not executed");
	}
?>