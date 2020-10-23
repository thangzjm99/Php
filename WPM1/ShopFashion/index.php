<?php
session_start();
ob_start();
include_once 'config/myConfig.php';
include_once 'Function/myFunction.php';
?>
<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/favicon.png">
   <title>Welcome to FlatShop</title>

   <link href="css/bootstrap.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
   <link href="css/sequence-looptheme.css" rel="stylesheet" media="all" />
   <link href="css/style.css" rel="stylesheet">


</head>

<body id="home">
   <div class="wrapper">
      <?php include_once 'includes/header.php'; ?>
      <div class="clearfix"></div>

      <div class="hom-slider">
         <?php
         include_once 'includes/slides.php';
         include_once 'includes/promotion.php';
         ?>
      </div>

      <div class="clearfix"></div>
      <div class="container_fullwidth">
         <div class="container">
            <?php
            if (isset($_GET['page'])) {
               $page = $_GET['page'];
            } else {
               $page = 'home';
            }

            if (file_exists('pages/' . $page . '.php')) {
               include_once 'pages/' . $page . '.php';
            } else {
               header("Location: 404.html");
            }
            ?>
            <?php include_once 'includes/brand.php';  ?>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="footer">
         <?php include_once 'includes/footer.php'; ?>
      </div>
   </div>
   <!-- Bootstrap core JavaScript==================================================-->
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
   <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
   <script defer src="js/jquery.flexslider.js"></script>
   <script type="text/javascript" src="js/script.min.js"></script>
</body>

</html>