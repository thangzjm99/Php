<?php  
	if (isset($_POST['ordered'])) {
		$name   = $_POST['name'];
		$phone  = $_POST['phone'];
		$email  = $_POST['email'];
		$addres = $_POST['addres'];
		$note   = $_POST['note'];
		$passw = md5('fashion.com');

		// Add thông tin người mua hàng
		$addCustomer = addCustomer($name, $phone, $addres, $email, $passw);
		$id_member = mysqli_insert_id($conn);

		// Add order
		$order = addOrder($id_member, $note);
		$id_order = mysqli_insert_id($conn);

		// Add detail order
		foreach ($_SESSION['cart'] as $pro) {
			$total = $pro['qty'] * $pro['price'];
			adOrderDetail($id_order, $pro['id'], $pro['qty'], $pro['price'], $total);
		}

		// Gửi mail đơn hàng cho khách
		include_once 'PHPMailer/class.phpmailer.php';
		include_once 'PHPMailer/class.smtp.php';

		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			$mail ->CharSet = "UTF-8";
		    //Server settings
		    $mail->SMTPDebug = 2;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'ustyle95@gmail.com';                     // SMTP username
		    $mail->Password   = '';                               // SMTP password
		    $mail->Port       = 587;                                    // TCP port to connect to, 

		    //Recipients
		    $mail->setFrom('hotro@fashion.com', 'Đơn hàng mới');
		    $mail->addAddress($email, $name);     // Add a recipient

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Đơn hàng mới tại Fashion.com';
		    $mail->Body    = 'Nội dung mail được gửi đi';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

		$_SESSION['notiCart'] = 2;
		unset($_SESSION['cart']);
		header("Location: index.php");

	}

?>