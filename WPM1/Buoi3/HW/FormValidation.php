<?php
if (isset($_POST['submit_form'])) {

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$learn = $_POST['learn'];
	if ($name && $phone && $email && $learn) {
		$check = 1;
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">

				<h4 style="margin: 30px 0px;">FORM ĐĂNG KÝ TÀI KHOẢN</h4>

				<form action="" method="POST" name="register" onsubmit="return FormValidate();">

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="name">Họ tên <span style="color: red;" id="errorName">(*)</span></label>
							<input type="text" name="name" class="form-control" id="name" />
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="phone">Phone <span style="color: red;" id="erorPhone">(*)</span></label>
							<input type="text" name="phone" class="form-control" id="phone" />
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="email">Email <span style="color: red;" id="erorEmail">(*)</span></label>
							<input type="text" name="email" class="form-control" id="email" />
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="learn">Chọn khóa học <span style="color: red;" id="error_learn">(*)</span></label>
							<select name="learn" class="form-control" id="learn">
								<option value="">-- Vui lòng chọn --</option>
								<option value="1">-- Lập trình PHP --</option>
								<option value="2">-- Lập trình JAVA --</option>
								<option value="3">-- Lập trình C --</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="pass">Mật khẩu <span style="color: red;" id="errorPass">(*)</span></label>
							<input type="password" name="passw" class="form-control" id="pass" />
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="passw">Nhập lại mật khẩu <span style="color: red;" id="errorConPass">(*)</span></label>
							<input type="password" name="con_passw" class="form-control" id="passw" />
						</div>
					</div>

					<button type="submit" name="submit_form" class="btn btn-primary">Gửi thông tin</button>
					<button type="reset" class="btn btn-danger">Xóa thông tin</button>
				</form>
			</div>
			<div class="col-md-6">
				<?php
				if (isset($check)) {
				?>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Learn</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="row">1</td>
								<td><?php echo $name; ?></td>
								<td><?php echo $phone; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $learn; ?></td>



							</tr>

						</tbody>
					</table>
				<?php } ?>



			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script>
		// function checkName(){
		// 	var name = document.getElementById('name').value;
		// 	var errorName = document.getElementById('errorName');
		// 	var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

		// 	if (name == '' || name == null) {
		// 		errorName.innerHTML = "Họ tên không được để trống!";
		// 	}else if(!regexName.test(name)){
		// 		errorName.innerHTML = "Họ tên không hợp lệ!";
		// 	}else{
		// 		errorName.innerHTML = '';
		// 		return name;
		// 	}
		// }

		function FormValidate() {
			var name = document.getElementById('name').value;
			var errorName = document.getElementById('errorName');
			var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

			var phone = document.getElementById('phone').value;
			var erorPhone = document.getElementById('erorPhone');
			var regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

			var email = document.getElementById('email').value;
			var errorEmail = document.getElementById('erorEmail');
			var reGexEmail = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

			if (name == '' || name == null) {
				errorName.innerHTML = "Họ tên không được để trống!";
			} else if (!regexName.test(name)) {
				errorName.innerHTML = "Họ tên không hợp lệ!";
			} else {
				errorName.innerHTML = '';
			}

			if (phone == '' || phone == null) {
				erorPhone.innerHTML = "Số điện thoại không được để trống!";
			} else if (!regexPhone.test(phone)) {
				erorPhone.innerHTML = "SĐT không hợp lệ!";
			} else {
				erorPhone.innerHTML = '';
			}

			if (email == '' || email == null) {
				errorEmail.innerHTML = "Email không được để trống!";
			} else if (!reGexEmail.test(email)) {
				errorEmail.innerHTML = "Email không hợp lệ!";
				email = '';
			} else {
				errorEmail.innerHTML = '';
			}

			var passW = document.getElementById('pass').value;
			var errorPass = document.getElementById('errorPass');

			if (passW == '' || passW == null) {
				errorPass.innerHTML = "Mật khẩu vui lòng không để trống!";
			} else {
				errorPass.innerHTML = "";
			}

			var ConPass = document.getElementById('passw').value;
			var errorConPass = document.getElementById('errorConPass');

			if (ConPass == '' || ConPass == null) {
				errorConPass.innerHTML = "Xác nhận mật khẩu vui lòng không để trống!";
			} else if (ConPass != passW) {
				alert("Xác nhận mật khẩu không trùng khớp!");
			} else {
				errorConPass.innerHTML = "";
			}

			// Lựa chọn khóa học
			var learn = document.getElementById('learn').value;
			var error_learn = document.getElementById('error_learn');
			if (learn == '' || learn == null) {
				error_learn.innerHTML = "Vui lòng chọn ít nhất một khóa học!";
			} else {
				error_learn.innerHTML = "";
			}

			if (name && phone && email && ConPass && passW && passW == ConPass) {
				// Người dùng đã nhập đúng thông tin
				return true;
				// return true; thực hiện việc submit form
			} else {

			}

			return false;
		}
	</script>

</body>

</html>