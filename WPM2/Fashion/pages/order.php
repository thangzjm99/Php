<?php  
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		$product = getProducId($id);

		// Khởi tạo biến $_SESSION['cart'] lưu thông tin sản phẩm khách mua
		if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
			$_SESSION['cart'][$id] = $product;
			$_SESSION['cart'][$id]['qty'] = 1;
		}else{
			if (array_key_exists($id, $_SESSION['cart'])) {
				$_SESSION['cart'][$id]['qty'] += 1;
			}else{
				$_SESSION['cart'][$id] = $product;
				$_SESSION['cart'][$id]['qty'] = 1;
			}
		}

		$_SESSION['notiCart'] = 1;
		header("Location: index.php");

	}
?>