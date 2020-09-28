<!DOCTYPE html>
<html lang="">
	<?php 
		include './layout/head.php';
	?>
	<body>

		<div class="container">
			
			<div class="row" style="margin-top: 150px;">
				<div class="col-md-6 col-md-push-3">
				<?php 
				if(isset($_GET['pages'])){
					$pages = $_GET['pages'];
				}
				else{

					$pages='login';
				}
				
				switch($pages){

					case 'register' : 
						include 'pages/register.php';
					break;
					default : 
						include 'pages/login.php';
					break;
				}
				
				?>

					
				</div>
			</div>

		</div>

		<script src="js/jquery.js"></script>
		<script src="js/myJava.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>