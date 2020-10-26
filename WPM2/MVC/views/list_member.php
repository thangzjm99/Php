<h4>DANH SÁCH HỌC VIÊN IT-PLUS</h4>
<?php print_r($rs); ?>
<div class="table-responsive">
	<table class="table table-hover"> 
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Addres</th>
				<th>Faculty</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($rs as $result)
			{
				?>
				<tr>
				<td>1</td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['phone']; ?></td>
				<td><?php echo $result['email']; ?></td>
				<td><?php echo $result['addres']; ?></td>
				<td><?php echo $result['title']; ?></td>
			
				<td>
					<a href="#">
						<button class="btn btn-primary">Sửa</button>
					</a>
					<a href="#">
						<button class="btn btn-danger">Xóa</button>
					</a>
				</td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
	</table>
</div>