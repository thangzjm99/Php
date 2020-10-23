<?php 
    // session_start(); 

    // if (isset($_COOKIE['id_users']) && $_COOKIE['check'] == 1) {
    //     setcookie('id_users', $_SESSION['id'], time() + 5, '/');
    //     setcookie('check', 1, time() + 5, '/');
    // }else{
    //     setcookie('check', 1, time() - 5, '/');
    //     header('Location: ../index.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/head.php'; ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'includes/nav.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php  
                    if (isset($_GET['page'])) {
                       $page = $_GET['page'];
                    }else{
                        $page = 'home';
                    }


                    if (file_exists('pages/'.$page.'.php')) {
                        include_once "pages/".$page.".php";
                    }else{
                        echo "Trang không tồn tại!";
                    }
                ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once 'includes/scripts.php'; ?>

</body>

</html>
