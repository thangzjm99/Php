<?php  
	echo "Xử lý update cart";

	if (isset($_POST['updateCart'])) {

		unset($_POST['updateCart']);
		foreach ($_POST as $id => $qty) {
			if ($qty > 0) {
				$_SESSION['cart'][$id]['qty'] = $qty;
			}else{
				// unset($_SESSION['cart'][$id]);
			}
		}

		echo "<pre>";
		print_r($_POST);
		echo "</pre>";

		echo "<hr>";

		echo "<pre>";
		print_r($_SESSION['cart']);
		echo "</pre>";
	}
	header("Location: index.php?page=order-detail");
?>