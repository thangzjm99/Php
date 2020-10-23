<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    body {
      width: 600px;
      margin: 0px auto;
    }
  </style>
</head>

<body>
  <h1>Đăng nhập hệ thống</h1>
  <hr>
  <form action="" method="POST">

    <div class="form-group">
      <label for="user">Email</label>
      <input type="username" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Email">

    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    
    <?php
    if (isset($error)) {
      
    ?>
      <p style="color: red;"><?php echo $error; ?>
      </p>
    <?php
    };
    ?>

  </form>

 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<?php
if (isset($_REQUEST['user'])) {
  $username = $_REQUEST['user'];
  $password = $_REQUEST['pass'];
  $account = [
    'name' => 'Thang',
    'email' => 'abc@gmail.com',
    'pass' => '123',
    'phone' => '012345677',
    'status' => 'Status',

  ];

  if ($username == $account['email'] && $password == $account['pass']) {
    echo "<script>
           window.location.href='http://itplus-academy.edu.vn/';
       </script>";
  } else {
    $error = "Dang nhap sai";
  
  }
}
?>