<?php
$dns = 'mysql:host=localhost;dbname=php0720e2_itplus';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dns, $user, $pass);
    $pdo->query('SET NAMES utf8');
} catch (PDOException $e) {
    echo $e->getMessage();
}
//Cach 1:
$sql = "select * from tbl_student";
foreach ($pdo->query($sql) as $value) {
    echo $value['name'];
}
//Cach 2 : 
$sqlFaculty = "Select* from tbl_faculty";
$pre = $pdo->prepare($sql); //Chuan bi thuc thi cau lenh truy van
$pre->execute();
$result = $pre->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

//Tim kiem
$id = 2;
$sql2 = "select * from tbl_student where id = :id";
$pre2 = $pdo->prepare($sql2);
$pre2->bindParam(':id', $id);
$pre2->execute();
$result2 = $pre2->fetchAll(PDO::FETCH_ASSOC);

print_r($result2);

$facultys_id = 3;
$name = 'Cao van teo';
$phone = '0999222992';
$email = 'thangzjm@gamil.com';
$addres = 'Ha Nam';
$gender = '1';

$sql3 = "insert into tbl_student(facultys_id,name,phone,email,addres,gender) values(:facultys_id,:name,:phone,:email,:addres,:gender)";
$pre3 = $pdo->prepare($sql3);
$pre3->bindParam(':facultys_id',$facultys_id);
$pre3->bindParam(':name',$name);
$pre3->bindParam(':phone',$phone);
$pre3->bindParam(':email',$email);
$pre3->bindParam(':addres',$addres);
$pre3->bindParam(':gender',$gender);

$add = $pre3->execute();
if($add){
    echo 'thanh cong them moi';
}
