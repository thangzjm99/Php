<?php 
class Person
{
    public $name='Trinh khac tung';
    public $age = 30;
    
    public function setAge($age){
       $this->age=$age;
    }

    public function getAge(){
        echo 'Tuoi = '.$this->age;
    }
}

$per = new Person();
$per->setAge(15);
$per->getAge();

// $info= new Person();
// echo $info->name.'<br>';
// echo $info->gender.'<br>';
// echo $info::phone.'<br>';
// echo $info->Go('Oto');
// echo '<br>';
// echo $info->Work();

// class Animal{
//     var $name ;
//     var $height  ;
//     var $weight;
//     var $color;

//     function setProperty($name,$height,$weight,$color){
//         $this->name=$name;
//         $this->height=$height;
//         $this->weight=$weight;
//         $this->color=$color;
//     }
//     function live($live)
//     {
//         return 'Noi song : '.$live;
//     }
//     function show($live){}

// }
?>