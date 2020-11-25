<?php  

	/**
	 * 
	 */
	include_once '../../config/myConfig.php';

	class Member_m extends Connect
	{
		
		function __construct(){
			parent::__construct(); // Gọi hàm __construct bên myConfig, luôn tồn tại $pdo để kết nối tới CSDL
		}

		public function getStudent()
		{
			$sql = "select * from tbl_student";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function delMember($id){
			$sql = "delete from tbl_student where id = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			return $pre->execute();
		}
	}

?>