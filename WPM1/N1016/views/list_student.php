<?php 
$sql  = "Select * from tbl_student,tbl_faculty where tbl_student.id_faculty=tbl_faculty.id_faculty";
$query = mysqli_query($conn,$sql); //Gửi câu lệnh truy vấn lên server 
$result = [];
while($row = mysqli_fetch_assoc($query) )
{

	$result[]=$row;
}
// echo "<pre>";
	
// 	// print_r($rs);
// 	print_r($result);
// echo "</pre>";

?>


<h4>DANH SÁCH HỌC VIÊN IT-PLUS</h4>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#_CODE</th>
                <th>Name</th>
                <th>Falcuty</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Addres</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
					foreach($result as $student)
					{
				?>
            <tr>

                <td><?php echo $student['id_student'];  ?></td>
                <td><?php echo $student['name'];  ?></td>
                <td><?php echo $student['name_faculty'];  ?></td>
                <td><?php echo $student['phone'];  ?></td>
                <td><?php echo $student['email'];  ?></td>
                <td>
                    <a href="#">
                        <button class="btn btn-primary">Sửa</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-danger">Xóa</button>
                    </a>
                </td>
			</tr>
					<?php }?>
        </tbody>
    </table>
</div>