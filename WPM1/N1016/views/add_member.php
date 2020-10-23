<?php 
$sql  = "Select * from tbl_faculty ";
$query = mysqli_query($conn,$sql); //Gửi câu lệnh truy vấn lên server 
$result = [];
while($row = mysqli_fetch_assoc($query))
{

	$result[]=$row;
}
// echo "<pre>";
	
// 	// print_r($rs);
// 	print_r($result);
// echo "</pre>";

?>

<form action="./add_success.php" method="GET" >
	<legend>Thêm mới học viên</legend>

	<div class="form-group">
		<label for="">Họ tên<span style="color: red;"> *</span></label>
		<input type="text" required class="form-control" name="name" placeholder="Họ tên học viên...">
	</div>
	<div class="form-group">
	  <label for="">Khoa<span style="color: red;"> *</span></label>
	  <select class="form-control" name="faculty" id="">
		  <?php 
			 foreach($result as $faculty)
			 { 
		  ?>
		<option value="<?php echo $faculty['id_faculty'];?>"><?php echo $faculty['name_faculty'];  ?></option>
		<?php 
			 }
		?>
		
		
		
	  </select>
	</div>

	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;"> *</span></label>
		<input type="number" required class="form-control" name="phone" placeholder="098569789">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" class="form-control" name="email" placeholder="it-plus@gmail.com">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;"> *</span></label>
		<input type="text" required class="form-control" name="address" placeholder="Địa chỉ học viên...">
	</div>

	<button type="submit" name="add_member" class="btn btn-primary">Thêm mới</button>
</form>

