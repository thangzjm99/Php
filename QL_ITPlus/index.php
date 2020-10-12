<?php 
session_start();
ob_start();
include_once "config/myConfig.php";
$sql  = "Select * from tbl_student";
$query = mysqli_query($conn,$sql); //Gửi câu lệnh truy vấn lên server 
$count = mysqli_num_rows($query); //Số bản ghi hiển thị
// $rs = mysqli_fetch_assoc($query);//Truyền db vào 1 mảng array

$result = [];
while($row = mysqli_fetch_assoc($query) )
{

	$result[]=$row;
}
echo "<pre>";
	print_r($query);
	echo $count;
	// print_r($rs);
	print_r($result);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="">
	<?php include_once 'layout/head.php'; ?>
	<body>

		<div class="container">
			
			<div class="row" style="margin-top: 150px;">
				<div class="col-md-6 col-md-push-3">
					<!-- Main -->

					<?php  
						if (isset($_GET['pages'])) {
							$pages = $_GET['pages'];
						}else{
							$pages = 'login';
						}

						switch ($pages) {
							case 'register':
								include_once 'pages/register.php';
								break;
							
							default:
								include_once 'pages/login.php';
								break;
						}
					?>

				</div>
			</div>

		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>