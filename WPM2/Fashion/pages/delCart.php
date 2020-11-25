<?php  
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
			unset($_SESSION['cart'][$id]);
		}
	}
	header("Location: index.php?page=order-detail");
?>