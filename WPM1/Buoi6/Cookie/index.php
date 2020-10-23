<?php 
    $name = 'tung php';
    $page = '';
    //khoi tao cookie

    setcookie('name',$name,time() + 5);

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>"
?>