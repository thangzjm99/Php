<?php  
	// Lấy sản phẩm hot trong database
	function getProductHot(){
		global $conn;

		$sql = "SELECT *FROM tbl_product WHERE stt = 2 LIMIT 0,4";
		$query = mysqli_query($conn, $sql);
		$result = array();

		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}

		return $result;
	}

	function getProductFeat(){
		global $conn;

		$sql = "SELECT *FROM tbl_product WHERE stt = 1 LIMIT 0,4";
		$query = mysqli_query($conn, $sql);
		$result = array();

		while ($row = mysqli_fetch_assoc($query)) {
			$result[] = $row;
		}

		return $result;
	}

	// Lấy thông tin sản phẩm theo id
	function getProducId($id){
		global $conn;

		$sql = "SELECT *FROM tbl_product WHERE id = $id";
		$query = mysqli_query($conn, $sql);
		return mysqli_fetch_assoc($query);
	}

	// Insert customer
	function addCustomer($name_member, $phone_member, $addres, $email_member, $passw){
		global $conn;

		$sql = "INSERT INTO 
				tbl_customer(name_member, phone_member, addres, email_member, passw) 
				VALUES('$name_member', '$phone_member', '$addres', '$email_member', '$passw')";
		return mysqli_query($conn, $sql);

	}

	// Insert Order
	function addOrder($id_member, $note){
		global $conn;

		$sql = "INSERT INTO 
				tbl_order(id_member, note) 
				VALUES($id_member, '$note')";
		return mysqli_query($conn, $sql);
	}

	// Insert detail order
	function adOrderDetail($id_order, $id_product, $quantity, $price, $total){
		global $conn;
		$sql = "INSERT INTO 
				tbl_detail_order(id_order, id_product, quantity, price, total) 
				VALUES($id_order, $id_product, $quantity, $price, $total)";

		return mysqli_query($conn, $sql);
	}
?>