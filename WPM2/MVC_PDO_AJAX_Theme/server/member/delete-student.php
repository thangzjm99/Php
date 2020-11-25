<?php 
    include_once "../../controller/Member_c.php";
    $mem = new Member_c();
    $id = (int)$_POST['id'];
    $student = $mem->delMember($id);
    if($student) {
        echo "deleter success";
    }
    else {
        echo "cant delete";
    }

?>