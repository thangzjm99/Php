<?php 
//L;ấy sản phẩm hot

function getProductHot(){
    global $conn;

    $sql ="Select * from tbl_product where stt=2";
    $query = mysqli_query($conn,$sql);
    $result = array();
    while($row = mysqli_fetch_assoc($query))
    {
        $result[] = $row;

    }
    return $result;
}
function getProductFeat(){
    global $conn;

    $sql ="Select * from tbl_product where stt=1";
    $query = mysqli_query($conn,$sql);
    $result = array();
    while($row = mysqli_fetch_assoc($query))
    {
        $result[] = $row;

    }
    return $result;
}

//Lấy thông tin sp theo id
function getProductId($id){
    global $conn;

    $sql ="Select * from tbl_product where id = $id";
    $query = mysqli_query($conn,$sql);
    $result = array();
    while($row = mysqli_fetch_assoc($query))
    {
        $result[] = $row;

    }
    return $result;
}
?>