<?php
	


	if (isset($_POST['sm_login'])) {
		$user  = $_POST['user'];
		$passw = md5($_POST['passw']);



		
	}

?>

<form action="" method="POST">
	<legend>Đăng nhập hệ thống</legend>

	<div class="form-group">
		<label for="">Username</label>
		<input type="email" required name="user" class="form-control" value="" placeholder="Nhập email của bạn">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" required name="passw" class="form-control" value="" placeholder="Nhập pass">
	</div>

	<button type="submit" name="sm_login" class="btn btn-primary">Đăng nhập</button>
	<span>Nếu bạn chưa có tài khoản? 
		<a href="index.php?pages=register" style="color: red;">Đăng ký</a></span>
	<?php  
		if (isset($errors) && !empty($errors)) {
	?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Warning: </strong> <?php echo $errors; ?>
		</div>
	<?php
		}
	?>
	
</form>

