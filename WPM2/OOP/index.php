<?php 
class Person
{
    var $name='Trinh khac tung';
    var $age = 30;
    var $gender = true;
    const phone = '09888800808';

    function Go($go){
        $info='Thong tin';
        return 'phuong tien di lam cua anh '.$this->name.' la : '.$go;

    }   
    
    function Work(){
        return 'cong viec lam la : Dev,co so dien thoai : '.self::phone.',phuong tien di lam la : '.$this->Go('Oto');
    }
}

$info= new Person();
echo $info->name.'<br>';
echo $info->gender.'<br>';
echo $info::phone.'<br>';
echo $info->Go('Oto');
echo '<br>';
echo $info->Work();
?>